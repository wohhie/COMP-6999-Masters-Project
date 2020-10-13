from mitmproxy import http
from mitmproxy.net.http.http1.assemble import assemble_request
from mitmproxy import contentviews
import requests
from bs4 import BeautifulSoup
from fuzzywuzzy import fuzz
import json



def website_content(content):
    soup = BeautifulSoup(content, 'html.parser')

    # kill all script and style elements
    for script in soup(["script", "style"]):
        script.extract()  # rip it out

    # get text
    text = soup.get_text()

    # break into lines and remove leading and trailing space on each
    lines = (line.strip() for line in text.splitlines())
    # break multi-headlines into a line each
    chunks = (phrase.strip() for line in lines for phrase in line.split("  "))
    # drop blank lines
    website_content = ','.join(chunk for chunk in chunks if chunk)

    return website_content






api = "http://proctorapp.online/api/blocksite?course_id=3&exam_id=3"
response = requests.get(api)
data = response.text
parsed = json.loads(data)


api_keyword = "http://proctorapp.online/api/questions?course_id=3&exam_id=3"
keyword_response = requests.get(api_keyword)
keyword_data = keyword_response.text
content_keywords = json.loads(keyword_data)




def request(flow: http.HTTPFlow) -> None:
    pattern = "https://www.tutorialspoint.com/software_engineering/se_quality_qa1.htm"
    # pretty_host takes the "Host" header of the request into account,
    # which is useful in transparent mode where we usually only have the IP
    # otherwise.
    # print('new connection')
    # print(flow.client_conn.address)
    # print(flow.request.url)
    # print(flow.request.pretty_host)


    # Specific Websites from API
    # for item in parsed:
    #     if search(item['url'], flow.request.pretty_host) :
    #         print("Blocked Successfully!")


    # Specific URL "Ask Now!"
    #print(flow.request.pretty_url)
    # if flow.request.pretty_url in pattern:
    #     flow.response = http.HTTPResponse.make(
    #         200,  # (optional) status code
    #         b"<h1>404 Error. Not Available Right Now! </h2>",  # (optional) content
    #         {"Content-Type": "text/html"}  # (optional) headers
    #     )



    if flow.request.method == "POST":
        if flow.request.urlencoded_form:
            form_data = flow.request.urlencoded_form
            print(form_data)
            for item in content_keywords:
                api_question = item['title']
                ratio = fuzz.partial_ratio(api_question, form_data['textdata'])
                print(ratio)

                if ratio >= 95:
                    flow.response = http.HTTPResponse.make(
                        200,  # (optional) status code
                        b'<div style="font-size: 24px; text-align: center"><h1>Error!!</h1><h3>Dude!! You cannot post the question on Web.</h3></div>',  # (optional) content
                        {"Content-Type": "text/html"}  # (optional) headers
                    )


def response(flow: http.HTTPFlow) -> None:
    # question = "Software Testing process?"
    flow.response.replace("Ask Question", "")
    flow.response.replace("question/ask", "")


    # If the question is search in google!
    # =======================================================================================
    if "www.google.com/search" in flow.request.pretty_url:
        page_content = flow.response.get_text()
        content = website_content(page_content)

        for item in content_keywords:
            question = item['title']
            ratio = fuzz.partial_ratio(content, question)
            print(ratio)
            if ratio > 90:
                soup = BeautifulSoup(open("question.html"))
                flow.response.content = str(soup).encode("utf8")


    # question and keyword match with the ratio.
    if  "www.google.com/search" not in flow.request.pretty_url:
        page_content = flow.response.get_text()
        # getting the website content.
        content = website_content(page_content)

        keywords = []
        percent = ''
        for item in content_keywords:
            keywords = item['keywords']
            parcent = item['percent']

        ratio = fuzz.partial_ratio(content, keywords)

        if ratio > 40:
            soup = BeautifulSoup(open("error.html"))
            flow.response.content = str(soup).encode("utf8")

    #print(flow.response)

    # content_type = get_content_type(flow)
    # if content_type_ok(content_type): # omit images/video
    #     patterns = get_replacements_by_url(flow.request.url, content_type)
    #
    #     for pair in patterns:
    #         search, replace = pair
    #
    #         # here we go:
    #         flow.response.text = re.sub(search, replace, flow.response.text)



    #
    # if 'jewel' in flow.response.text:
    #     pass
        # print('Danger!!!!!!!!')
    #
    # if "Content-Type" in flow.response.headers and flow.response.headers["Content-Type"].find("text/html") != -1:
    #     pageUrl = flow.request.url
    #     pageText = flow.response.text
    #     pattern = (r"/[ask]/")



    # Form information monitor throughout the process


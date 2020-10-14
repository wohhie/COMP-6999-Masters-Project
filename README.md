# COMP-6999-Masters-Project

### Abstract
The online exam system has grown popularity over countries because of its adaptability, user-friendliness, and candidates' ability to take the exam remotely. According to the research community, the major challenge in the online exam is the proctoring technique. Since there is no rule-based proctoring system, it opens new opportunities for defrauding and accessing internet resources for reference during an exam. 

Ironically, none of the proctoring systems monitor the students' network traffic (inbound and outbound) contents, which they access, and this motivates us to question what sort of proctoring application can automate the proctoring process using some predefined rules and observe traffic contents during an examination.

In this project, our developed proctoring system offers a novel way to automate the proctoring process and detect fraudulent activity during an online exam by intercepting network inbound and outbound traffic content using MITMproxy  and analyze it with Natural Language Processing. To test our application's feasibility, we applied several flexible proctoring rules and sample exam questions to enforce proctoring rules using content analysis to limit the access resources. In most testing situations, the proctoring application performs better if the exam question is a sequence of words or a sentence rather than complicated mathematical or chemical reaction related questions. 



## Architecture

<p align="center">
  <img src="https://user-images.githubusercontent.com/13005159/95876565-c42f2900-0d4d-11eb-9c49-e1bd4f2d6e4a.png">
  <br/><br/><b>Design of the proctoring System</b><br>
</p>


<br/>
<br/>
<br/>
<br/>
<p align="center">
  <img src="https://user-images.githubusercontent.com/13005159/95876775-fa6ca880-0d4d-11eb-8d9e-8f716bfc6c0f.png">
  <br/><b>Prototype of the proposed automated proctoring system.</b><br>
</p>



## Desktop Application 

<img src="https://user-images.githubusercontent.com/13005159/95877008-415a9e00-0d4e-11eb-9205-a43d0c668042.png" width="240"/> <img src="https://user-images.githubusercontent.com/13005159/95877005-40c20780-0d4e-11eb-9d00-6339a7a6bcd9.png" width="240"/> <img src="https://user-images.githubusercontent.com/13005159/95877009-415a9e00-0d4e-11eb-9d88-91fd2c3b5a85.png" width="240"/> 

## Web Application & RESTful API

![Picture3](https://user-images.githubusercontent.com/13005159/95884326-871b6480-0d56-11eb-981e-4b1eba1e3ac2.png)
<br/>
<br/>
<br/>
![Picture4](https://user-images.githubusercontent.com/13005159/95884328-87b3fb00-0d56-11eb-8654-cbdc4dda3b73.png)

## Server Application - mitmproxy & Natural Language Processing

#### MITMproxy 
MITMproxy is an HTTP proxy/HTTP monitor that allows developers to view all HTTP and SSL/HTTPS traffic within the client and the server. The MITM stands for Man-In-The-Middle; the basic idea behind it is to represent the server to the client and be the client to the server, while in the middle, we can monitor the traffic coming from both sides on MITM proxy monitor.

#### Natural language processing using Fuzzy string matching
Fuzzy string matching is a way of finding strings that match a pattern approximately. This  check and seeks matches even if the word is mispronounced or the word is incomplete. This is  called  approximate matching. The proctor application uses the fuzzy string matching to match content between the exam question and the internet content. The fuzzy string matching applies the algorithm for editing distance or the Levenshtein distance algorithm to measure whether two strings are identical and Levenshtein distance is most often used for mapping and comparing genomes.

##### Levenshtein distance metric algorithm
The Levenshtein metric distance algorithm estimates the difference between the two-word sequences (Okuda, Tanaka, & Kasai, 1976). In other words, it calculates the minimum number of edits needed to alter the sequence of one word to another, and the changes can be insertions, deletions, or replacements.



## Database 
<p align="center">
  <img src="https://user-images.githubusercontent.com/13005159/95884421-a87c5080-0d56-11eb-8662-bcbeb47f0a12.png">
  <br/><b>Database Enhanced entity-relationship diagram.</b><br>
</p>

![_Entity Relationship Diagram Example (UML Notation) (1)]()


## Report 
In this study, we develop a proctoring system that automates the proctoring process by defining flexible proctoring rules, monitoring students' inbound, and outbound traffic content during an online exam—also restricting online resources. The implemented proctoring system is also focused on observing a) Network inbound and outbound traffic, and b) System information. The developed proctoring system has a desktop student application and web-based proctor application. The student desktop application allows students to connect to the exam server during an exam. The web-based proctor application is for monitoring students, setting rules, and restricting resources during an exam. On the server-side, the proctoring application uses the MITMproxy library to intercept all HTTP and HTTPs network inbound and outbound traffic content and analyze these intercepted contents using Natural Language processing. The entire process we develop is unique. Finally, we tested our proposed proctoring application with four different rules. As none of the existing proctoring system have an option to set rules for the exam,  we tried to make our proctoring rules very flexible. In most testing situations, the proctoring application performs better if the exam question is a sequence of words or a sentence rather than mathematical or chemical reaction related questions.
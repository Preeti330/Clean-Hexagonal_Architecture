# Clean-Hexagonal_Architecture
explore clean and hexgonal aritecture and immpelement it on real time project.

this architecture helps to devide the code on base of concern dependency to mainatin ,sclable and also makes easy tp test. 

# Clean Architecture
which tells that devide the software into layers and each layers is responisble for certain functionlities.<br/>
and dependecny flow goes from outter most to inner most . 
lets consider an application is devdeing into three layers as ,
# 1.Domin 
which is reponisble for building enties and all needed business logics 
# 2.Application Layer 
which is depends on domain and it is responisble for doing perticular task or define the users task 
# 3.infrastructure layer 
 which helps to develop aplications and which handles the use cases,user intarction etc.

 lets consider , develop a software for user registartion using clean architecture .<br/>
 Domain : User is an entity or domain which defines all the logics needed to validate and save user <br/>
 
 Application : UserRepository which is an interface to intract with user Entity  and having a method save() to save the data into DB .<br/>
  and it also consit an RegisterUserUseCase use case to validate and save the user <br/>

Infrastructure Layer : this delas with developing an application to register user .<br/>
                       it is having a class DatabaseUserRepository class and which immpelents the UserRepository and complets its save method to save the user into db 



# Hexagonal Architecture 
which separtes the software into multiple layers to easy maitains and testability of application.
this architecture is in hexagonal starurutre where all businic logic resides at center and its connects extrnal world with ports and adpotors.<br/>

hexgonal architecture has <br/>
# 1. Domain
where all bussiness logics are resides at center .(and can be modified in future without effecting to application) <br/>
Ex : consider you are at center in room , and having ur own thinkings and logics. 
# 2. Port 
this are tells what a domain can do for extranl users and how its intract with outside world .<br/> 
so its tells that it defines usecases or services <br/>
Primary prot : defines use cases or services how/what it can deliver to extrnal world <br/>
Secondary Port : defines use cases or services for what it can takes by extranl world.

# 3.Adoptor 
which tells how can you intract with extrnal word . <br/>
in the above exmple consider room is having windows so this windows helps others to intract with you . 
i.e using DB ,UI , Apis etc user intract with application or domain logics<br/>
Primary adpotor : how outside world intract with you i.e defines extrnal rescources like UI or API <br/>
Secondary Adpotor : this tells how you are intacting with extranl word . i.e defines Data base or Extranal API .

consider in future if you want to replace the farme work used to build the logic , just have to replce the busincis logics with other frame work.
by doing this it tells that thier is no need to change in the applications 


                      
 



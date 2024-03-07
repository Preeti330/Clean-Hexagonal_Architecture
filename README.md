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

 lets consider , develop a software for user registartion using clean architecture .
 Domain : User is an entity or domain which defines all the logics needed to validate and save user 
 Application : UserRepository which is an interface to intract with user Entity  and having a method save() to save the data into DB .
               and it also consit an RegisterUserUseCase use case to validate and save the user 

Infrastructure Layer : this delas with developing an application to register user .
                       it is having a class DatabaseUserRepository class and which immpelents the UserRepository and complets its save method to save the user into db 
                      
 



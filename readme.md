# Info

    In this folder you can find the container for Bryan Mora Backend Test

# Steps

    - Step 1: Download source code from github: https://github.com/bmoracr/blankfactor.git
    - Step 2: Open the main folder with an OS terminal or Visual Studio Code then run the next command "docker-compose up -d".
    - Step 3: Hold on a couple of minutes  due to the mysql initialization delay.

# Routes

    - Request method [GET] | Obtain al user information by ID: http://localhost:8888/api/users/{id}
    - Request method [POST] | Creates a new user: http://localhost:8888/api/users/

# Note

    - Application was realize with the follow versions, PHP-Laravel:latest, MYSQL:latest and with NGINX official docker image. 
    - This API does not has any Authorization requirement by your email specifications, but if you need it I can make an updated to the same repository.

Was a pleasure to complete this test, If exists any issue installing this container just put in touch `bryanmora1994@gmail.com`.
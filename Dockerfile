# all the commands that you have in docker file will apply to the container environment 
# none of them willl affect my host/laptop environment 
 
FROM php:8.2-apache

# Install MySQL extension (mysqli)
RUN docker-php-ext-install mysqli pdo pdo_mysql


# Copy project files to the container
# this command will executes on host machine 
# src is source and /var/www/html/ is the target 
# all the thing from source will be copied to the targeted environment 
COPY src/ /var/www/html/

# CMD is the always part of the docker file but idk why we havent include that (bcoz we used expose i think so )
# it executes entry point llinux command 
EXPOSE 80


# now we can build docker image from the dockerfile     
# with 2 parameter 
# 1 image name with tag -t 
# 2 location of the dockerfile 
# docker build -t myapp:1.0 .
# here dot is the location of the docker file 

# what we are doing in normal way
# we are creating a docker-compose.yaml file and then run it using docker-compose - f filename up  / docker-compose up then 
# running the application in node app -> node server.js

# but what if we build an image
# run directly that image and that is it 

# NOTE : whenever we adjust the docker file we have to rebuild the image 
# docker rmi image ID
# for that first delete the container and then delete the image

# or we can also build another version like docker build -t myapp:1.1 (this will create a second image)

# idea - instead of copying the file of the project into /var/html/ use your own created path such as home/app in run command 

# idea - don't copy unwanted file such as dockerfile and yaml file just put the needed files in folder and copy as below suggested
# COPY ./folderonhost /home/app


# what if we want to push this image in private registry such as ecr of aws 
# 1. create ecr registry 
# 2. view push command (go and check there)
# 3. first we have to authenticate our selves to that private reppository with login command provide bu ecr 
# 4. for pushing image into PR - using tag and push commad provided by ecr
# 5. tag is for renaming and push for push\\
# 6. if we use only docker push myapp:1.0 it will assume that we are pushing this into dockerhub 



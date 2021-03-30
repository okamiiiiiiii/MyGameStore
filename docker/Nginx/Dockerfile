FROM nginx:1.17.6-alpine

ENV TZ Asia/Ho_Chi_Minh

COPY ./conf.d/ /etc/nginx/conf.d
COPY ./fastcgi.conf /etc/nginx/fastcgi.conf
COPY ./nginx.conf /etc/nginx/nginx.conf

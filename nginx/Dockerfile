# Build from official image
FROM nginx:1.16.0-alpine

# Override the nginx configuration
#COPY ./default.conf /etc/nginx/conf.d/

# Copy all the configuration to nginx
COPY ./*.conf /etc/nginx/conf.d/

# Override the logrotate configuration
COPY ./logrotate.txt /etc/logrotate.d/nginx
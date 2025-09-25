## HINTS

- https://hub.docker.com/_/httpd
- gebruik de volume optie

- template

```YML
services:
 NAAM:
     image: WELKE IMAGE HEB JE NODIG
     ports:
        - EXTERN:INTERN
        - 9999:80
     volumes:
         - './BUITEN:/BINNEN'

```
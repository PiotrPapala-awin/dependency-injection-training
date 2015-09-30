FROM mysql:5.6.27

# prepare a directory and copy init files to this dir
RUN mkdir -p /home/sql
COPY ./init_db.sh /home/sql/init_db.sh
COPY ./init.sql /home/sql/init.sql
RUN chmod 0777 /home/sql/init_db.sh

# setup working directory and run init script
WORKDIR /home/sql

# just a port expose
EXPOSE 3306

# start the server
CMD ["mysqld"]

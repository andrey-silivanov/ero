FROM cassandra:3.11

RUN sed -i 's/#MAX_HEAP_SIZE="4G"/MAX_HEAP_SIZE="100M"/g' /etc/cassandra/cassandra-env.sh
RUN sed -i 's/#HEAP_NEWSIZE="800M"/HEAP_NEWSIZE="100M"/g' /etc/cassandra/cassandra-env.sh

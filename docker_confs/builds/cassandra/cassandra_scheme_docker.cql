CREATE KEYSPACE serpstat  WITH REPLICATION = { 'class' : 'SimpleStrategy', 'replication_factor' : 1 };
use serpstat;
CREATE TABLE google_ua (
  keyword_id int,
  date date,
  serp text,
PRIMARY KEY (keyword_id))
WITH compression = { 'sstable_compression' : 'DeflateCompressor' }
AND read_repair_chance = 0
AND gc_grace_seconds=86400;
INSERT INTO google_ua (keyword_id, date, serp) VALUES(1, '2016-09-01', 'google serp page 1');
CREATE TABLE counters   (
  date timestamp,
  type varchar,
  se varchar,
  name varchar,
  count counter,
  PRIMARY KEY (date, type, se, name)
);
UPDATE counters SET count = count+1 WHERE type='checker' AND name='awm' AND se='g_ua' AND date='2016-09-01 12:00:00';
CREATE TABLE daemon_counters   (
  daemon_id int,
  date timestamp,
  count int,
  PRIMARY KEY (daemon_id, date)
);
ALTER KEYSPACE system_auth WITH REPLICATION = { 'class' : 'SimpleStrategy', 'replication_factor' : 1 };


CREATE TABLE google_rt (
  date date,
  keyword_id int,
  region_id int,
  serp text,
PRIMARY KEY (date, keyword_id, region_id))
WITH  compression = { 'sstable_compression' : 'DeflateCompressor' }
AND read_repair_chance = 0
AND gc_grace_seconds=86400;

INSERT INTO google_rt (keyword_id, region_id, date, serp) VALUES(1, 2, '2016-09-01', 'google serp page 1');

CREATE TABLE google_rt_api (
  date date,
  keyword_id int,
  serp text,
PRIMARY KEY (date, keyword_id))
WITH  compression = { 'sstable_compression' : 'DeflateCompressor' }
AND read_repair_chance = 0
AND gc_grace_seconds=86400;

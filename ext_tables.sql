#
# Table structure for table 'tx_preview'
#
CREATE TABLE tx_preview (
  hash varchar(32) DEFAULT '' NOT NULL,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,
  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  PRIMARY KEY (hash)
);

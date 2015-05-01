Create Table if not exists sny_m_jusaha(
`ID`  char(3) CHARACTER SET ascii COLLATE ascii_bin NOT NULL DEFAULT '' ,
`Description`  varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ,
`Last_Modified`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=ascii
COMMENT='digunakan untuk master jenis usaha'
ROW_FORMAT=COMPACT
s;


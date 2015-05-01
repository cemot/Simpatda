CREATE TABLE If Not exists `sny_m_organisasi` (
`ID`  varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL DEFAULT '' ,
`Unit_Desc`  varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ,
`Level`  smallint(6) NULL DEFAULT 0 ,
`ID_Parent`  varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ,
`Keterangan`  varchar(100) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ,
`Last_Modified`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
PRIMARY KEY (`ID`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=ascii
CHECKSUM=0
ROW_FORMAT=DYNAMIC
DELAY_KEY_WRITE=0
;


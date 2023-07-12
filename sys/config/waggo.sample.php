<?php
/**
 * waggo8.1 configuration
 */
const WG_DEBUG							=	false ;
const WG_SQLDEBUG						=	false ;
const WG_SESSIONDEBUG					=	false ;
const WG_CONTROLLERDEBUG				=	false ;
const WG_MODELDEBUG						=	false ;
const WG_JSNOCACHE						=	false ;
const WG_INSTALLDIR						=	'/var/www';
const WG_LOGDIR							=	WG_INSTALLDIR . "/logs" ;
const WG_LOGNAME						=	'waggo.localhost.log';
const WG_LOGFILE						=	WG_LOGDIR . '/' . WG_LOGNAME ;
const WG_LOGTYPE						=	0 ;
define( 'WG_ENCODING'					,	mb_internal_encoding() );

const WGCONF_DIR_ROOT					=	WG_INSTALLDIR ;
const WGCONF_DIR_WAGGO					=	WG_INSTALLDIR . '/sys/waggo8.1' ;
const WGCONF_DIR_PUB					=	WG_INSTALLDIR . '/pub';
const WGCONF_DIR_SYS					=	WG_INSTALLDIR . '/sys';
const WGCONF_DIR_TPL					=	WG_INSTALLDIR . '/tpl';
const WGCONF_CANVASCACHE				=	WG_INSTALLDIR . '/temporary';
const WGCONF_DIR_UP						=	WG_INSTALLDIR . '/upload';
const WGCONF_DIR_RES					=	WG_INSTALLDIR . '/resources';
const WGCONF_DIR_EXTENSIONS				=	WG_INSTALLDIR . '/extensions';

const WGCONF_DIR_FRAMEWORK				=	WGCONF_DIR_WAGGO . '/framework';
const WGCONF_DIR_FRAMEWORK_MODEL		=	WGCONF_DIR_FRAMEWORK . '/m';
const WGCONF_DIR_FRAMEWORK_VIEW8		=	WGCONF_DIR_FRAMEWORK . '/v8';
const WGCONF_DIR_FRAMEWORK_CONTROLLER 	=	WGCONF_DIR_FRAMEWORK . '/c';
const WGCONF_DIR_FRAMEWORK_GAUNTLET		=	WGCONF_DIR_FRAMEWORK . '/gauntlet';
const WGCONF_DIR_FRAMEWORK_PARAMETERS	=	WGCONF_DIR_FRAMEWORK . '/parameters';

const WGCONF_PEAR						=	'/usr/local/bin/pear';
const WGCONF_UP_PX						=	640 ;

const WGCONF_SMTP_HOST					=	'localhost' ;
const WGCONF_SMTP_PORT					=	25 ;
const WGCONF_SMTP_AUTH					=	false ;
const WGCONF_SMTP_AUTH_USERNAME			=	'' ;
const WGCONF_SMTP_AUTH_PASSWORD			=	'' ;
const WGCONF_SMTP_LOCALHOST				=	'localhost' ;

const WGCONF_SMTP_TEST					=	false ;
const WGCONF_SMTP_TEST_RCPTTO			=	'root@localhost' ;

const WGCONF_EMAIL						=	'root@localhost' ;
const WGCONF_ERRMAIL					=	WGCONF_EMAIL ;
const WGCONF_REPORTMAIL					=	WGCONF_EMAIL ;

const WGCONF_SESSION_GCTIME				=	60 * 30;

const WGCONF_DBMS_TYPE					=	'pgsql' ;
const WGCONF_DBMS_HOST					=	'db';
const WGCONF_DBMS_PORT					=	5432 ;
const WGCONF_DBMS_DB					=	'waggo';
const WGCONF_DBMS_USER					=	'waggo';
const WGCONF_DBMS_PASSWD				=	'waggo';
const WGCONF_DBMS_CA					=	'';

define( 'WGCONF_URLBASE', 'http://' . $_SERVER['SERVER_NAME'] );

const WGCONF_GOOGLEMAPS_X				=	139.767073 ;
const WGCONF_GOOGLEMAPS_Y				=	35.681304 ;
const WGCONF_PHPCLI						=	'/usr/local/bin/php';
const WGCONF_CONVERT					=	'/usr/bin/convert';
const WGCONF_FFMPEG						=	'/usr/bin/ffmpeg';

const WGCONF_HASHKEY					=	'H3zYI~[QaIz101|jfbj3g8v<6ya4UqFs';
const WGCONF_PASSWORD_HASHKEY			=	'$NNmR|1w,$B>/w+2e-2{kK>/1;3FzEsH';

global $WGCONF_AUTOLOAD;
$WGCONF_AUTOLOAD = [
	WGCONF_DIR_FRAMEWORK_VIEW8,
	WGCONF_DIR_FRAMEWORK_GAUNTLET,
	WGCONF_DIR_FRAMEWORK_MODEL,
	WGCONF_DIR_FRAMEWORK_PARAMETERS,
	WGCONF_DIR_FRAMEWORK,
	WGCONF_DIR_SYS.'/include',
];

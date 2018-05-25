<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_htmlphpsql extends HFile{
   function HFile_htmlphpsql(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// HTML+PHP+MySQL
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("{");
$this->unindent          	= array("}");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "+", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "=");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"<A" => "1", 
			"</A>" => "1", 
			"<ABBR>" => "1", 
			"<ABBR" => "1", 
			"</ABBR>" => "1", 
			"<ABOVE>" => "1", 
			"<ACRONYM>" => "1", 
			"<ACRONYM" => "1", 
			"</ACRONYM>" => "1", 
			"<ADDRESS>" => "1", 
			"<ADDRESS" => "1", 
			"</ADDRESS>" => "1", 
			"<APPLET" => "1", 
			"</APPLET>" => "1", 
			"<ARRAY>" => "1", 
			"<AREA" => "1", 
			"</AREA" => "1", 
			"<B>" => "1", 
			"<B" => "1", 
			"</B>" => "1", 
			"<BASE" => "1", 
			"<BASEFONT" => "1", 
			"<BDO>" => "1", 
			"<BDO" => "1", 
			"</BDO>" => "1", 
			"<BGSOUND" => "1", 
			"<BIG>" => "1", 
			"<BIG" => "1", 
			"</BIG>" => "1", 
			"<BLINK>" => "1", 
			"</BLINK>" => "1", 
			"<BLOCKQUOTE>" => "1", 
			"<BLOCKQUOTE" => "1", 
			"</BLOCKQUOTE>" => "1", 
			"<BODY" => "1", 
			"<BODY>" => "1", 
			"</BODY>" => "1", 
			"<BOX>" => "1", 
			"<BR" => "1", 
			"<BR>" => "1", 
			"<BLINK" => "1", 
			"<BUTTON>" => "1", 
			"</BUTTON>" => "1", 
			"<CAPTION>" => "1", 
			"<CAPTION" => "1", 
			"</CAPTION>" => "1", 
			"<CENTER>" => "1", 
			"<CENTER" => "1", 
			"</CENTER>" => "1", 
			"<CITE>" => "1", 
			"<CITE" => "1", 
			"</CITE>" => "1", 
			"<CODE>" => "1", 
			"<CODE" => "1", 
			"</CODE>" => "1", 
			"<COL>" => "1", 
			"</COL>" => "1", 
			"<COLGROUP>" => "1", 
			"</COLGROUP>" => "1", 
			"<COMMENT>" => "1", 
			"</COMMENT>" => "1", 
			"<DD>" => "1", 
			"<DD" => "1", 
			"</DD>" => "1", 
			"<DEL>" => "1", 
			"<DEL" => "1", 
			"</DEL>" => "1", 
			"<DFN>" => "1", 
			"<DFN" => "1", 
			"</DFN>" => "1", 
			"<DIR>" => "1", 
			"<DIR" => "1", 
			"</DIR>" => "1", 
			"<DIV>" => "1", 
			"<DIV" => "1", 
			"</DIV>" => "1", 
			"<DL>" => "1", 
			"<DL" => "1", 
			"</DL>" => "1", 
			"<DT>" => "1", 
			"<DT" => "1", 
			"</DT>" => "1", 
			"<EM>" => "1", 
			"<EM" => "1", 
			"</EM>" => "1", 
			"<EMBED" => "1", 
			"<FIELDSET>" => "1", 
			"<FIELDSET" => "1", 
			"</FIELDSET>" => "1", 
			"<FIG>" => "1", 
			"<FONT" => "1", 
			"</FONT>" => "1", 
			"<FORM>" => "1", 
			"<FORM" => "1", 
			"</FORM>" => "1", 
			"<FRAME" => "1", 
			"<FRAMESET" => "1", 
			"</FRAMESET>" => "1", 
			"<H1>" => "1", 
			"<H1" => "1", 
			"</H1>" => "1", 
			"<H2>" => "1", 
			"<H2" => "1", 
			"</H2>" => "1", 
			"<H3>" => "1", 
			"<H3" => "1", 
			"</H3>" => "1", 
			"<H4>" => "1", 
			"<H4" => "1", 
			"</H4>" => "1", 
			"<H5>" => "1", 
			"<H5" => "1", 
			"</H5>" => "1", 
			"<H6>" => "1", 
			"<H6" => "1", 
			"</H6>" => "1", 
			"<HEAD>" => "1", 
			"<HEAD" => "1", 
			"</HEAD>" => "1", 
			"<HR>" => "1", 
			"<HR" => "1", 
			"<HTML>" => "1", 
			"<HTML" => "1", 
			"</HTML>" => "1", 
			"<I>" => "1", 
			"<I" => "1", 
			"</I>" => "1", 
			"<IFRAME>" => "1", 
			"</IFRAME>" => "1", 
			"<ILAYER>" => "1", 
			"</ILAYER>" => "1", 
			"<IMG" => "1", 
			"<INPUT>" => "1", 
			"<INPUT" => "1", 
			"<INS>" => "1", 
			"<INS" => "1", 
			"</INS>" => "1", 
			"<ISINDEX>" => "1", 
			"<ISINDEX" => "1", 
			"<KBD>" => "1", 
			"<KBD" => "1", 
			"</KBD>" => "1", 
			"<LABEL>" => "1", 
			"<LABEL" => "1", 
			"</LABEL>" => "1", 
			"<LAYER>" => "1", 
			"<LEGEND>" => "1", 
			"<LEGEND" => "1", 
			"</LEGEND>" => "1", 
			"<LI>" => "1", 
			"<LI" => "1", 
			"</LI>" => "1", 
			"<LINK" => "1", 
			"<LISTING>" => "1", 
			"</LISTING>" => "1", 
			"<MAP" => "1", 
			"</MAP>" => "1", 
			"<MARQUEE" => "1", 
			"</MARQUEE>" => "1", 
			"<MENU>" => "1", 
			"<MENU" => "1", 
			"</MENU>" => "1", 
			"<META" => "1", 
			"<MULTICOL>" => "1", 
			"</MULTICOL>" => "1", 
			"<NEXTID" => "1", 
			"<NOBR>" => "1", 
			"</NOBR>" => "1", 
			"<NOFRAMES>" => "1", 
			"</NOFRAMES>" => "1", 
			"<NOLAYER>" => "1", 
			"</NOLAYER>" => "1", 
			"<NOTE>" => "1", 
			"</NOTE>" => "1", 
			"<NOSCRIPT>" => "1", 
			"</NOSCRIPT>" => "1", 
			"<OBJECT>" => "1", 
			"<OBJECT" => "1", 
			"<OL>" => "1", 
			"<OL" => "1", 
			"</OL>" => "1", 
			"<OPTION>" => "1", 
			"<OPTION" => "1", 
			"<OPTGROUP>" => "1", 
			"<OPTGROUP" => "1", 
			"</OPTGROUP>" => "1", 
			"<P" => "1", 
			"<P>" => "1", 
			"</P>" => "1", 
			"<PARAM" => "1", 
			"<PRE>" => "1", 
			"<PRE" => "1", 
			"</PRE>" => "1", 
			"<Q>" => "1", 
			"<Q" => "1", 
			"</Q>" => "1", 
			"<QUOTE>" => "1", 
			"<RANGE>" => "1", 
			"<ROOT>" => "1", 
			"<S>" => "1", 
			"<S" => "1", 
			"</S>" => "1", 
			"<SAMP>" => "1", 
			"<SAMP" => "1", 
			"</SAMP>" => "1", 
			"<SCRIPT" => "1", 
			"<SCRIPT>" => "1", 
			"</SCRIPT>" => "1", 
			"<SELECT" => "1", 
			"</SELECT>" => "1", 
			"<SMALL>" => "1", 
			"<SMALL" => "1", 
			"</SMALL>" => "1", 
			"<SOUND" => "1", 
			"<SPACER>" => "1", 
			"<SPAN>" => "1", 
			"<SPAN" => "1", 
			"</SPAN>" => "1", 
			"<SQRT>" => "1", 
			"<STRIKE>" => "1", 
			"<STRIKE" => "1", 
			"</STRIKE>" => "1", 
			"<STRONG>" => "1", 
			"<STRONG" => "1", 
			"</STRONG>" => "1", 
			"<STYLE>" => "1", 
			"<STYLE" => "1", 
			"</STYLE>" => "1", 
			"<SUB>" => "1", 
			"<SUB" => "1", 
			"</SUB>" => "1", 
			"<SUP>" => "1", 
			"<SUP" => "1", 
			"</SUP>" => "1", 
			"<TABLE>" => "1", 
			"<TABLE" => "1", 
			"</TABLE>" => "1", 
			"<TBODY>" => "1", 
			"<TBODY" => "1", 
			"</TBODY>" => "1", 
			"<TD" => "1", 
			"<TD>" => "1", 
			"</TD>" => "1", 
			"<TEXT>" => "1", 
			"<TEXTAREA" => "1", 
			"<TEXTAREA>" => "1", 
			"</TEXTAREA>" => "1", 
			"<TFOOT>" => "1", 
			"<TFOOT" => "1", 
			"</TFOOT>" => "1", 
			"<TH" => "1", 
			"<TH>" => "1", 
			"</TH>" => "1", 
			"<THEAD>" => "1", 
			"<THEAD" => "1", 
			"</THEAD>" => "1", 
			"<TITLE>" => "1", 
			"</TITLE>" => "1", 
			"<TR" => "1", 
			"<TR>" => "1", 
			"</TR>" => "1", 
			"<TT>" => "1", 
			"</TT>" => "1", 
			"<TT" => "1", 
			"<U>" => "1", 
			"<U" => "1", 
			"</U>" => "1", 
			"<UL>" => "1", 
			"<UL" => "1", 
			"</UL>" => "1", 
			"<VAR>" => "1", 
			"</VAR>" => "1", 
			"<VAR" => "1", 
			"<WBR>" => "1", 
			"<XMP>" => "1", 
			"</XMP>" => "1", 
			"ABBR=" => "2", 
			"ACCEPT-CHARSET=" => "2", 
			"ACCEPT=" => "2", 
			"ACCESSKEY=" => "2", 
			"ACTION=" => "2", 
			"ALIGN=" => "2", 
			"ALINK=" => "2", 
			"ALT=" => "2", 
			"ARCHIVE=" => "2", 
			"AXIS=" => "2", 
			"BACKGROUND=" => "2", 
			"BEHAVIOR" => "2", 
			"BELOW" => "2", 
			"BGCOLOR=" => "2", 
			"BORDER=" => "2", 
			"BORDERCOLOR=" => "2", 
			"CELLPADDING=" => "2", 
			"CELLSPACING=" => "2", 
			"CHAR=" => "2", 
			"CHAROFF=" => "2", 
			"CHARSET=" => "2", 
			"CHECKED" => "2", 
			"CITE=" => "2", 
			"CLASS=" => "2", 
			"CLASSID=" => "2", 
			"CLEAR=" => "2", 
			"CODE=" => "2", 
			"CODEBASE=" => "2", 
			"CODETYPE=" => "2", 
			"COLOR=" => "2", 
			"COLS=" => "2", 
			"COLSPAN=" => "2", 
			"COMPACT" => "2", 
			"CONTENT=" => "2", 
			"COORDS=" => "2", 
			"DATA=" => "2", 
			"DATETIME=" => "2", 
			"DECLARE" => "2", 
			"DEFER" => "2", 
			"DIR=" => "2", 
			"DISABLED" => "2", 
			"ENCTYPE=" => "2", 
			"FACE=" => "2", 
			"FOR=" => "2", 
			"FRAME=" => "2", 
			"FRAMEBORDER=" => "2", 
			"FRAMESPACING=" => "2", 
			"HEADERS=" => "2", 
			"HEIGHT=" => "2", 
			"HIDDEN=" => "2", 
			"HREF=" => "2", 
			"HREFLANG=" => "2", 
			"HSPACE=" => "2", 
			"HTTP-EQUIV=" => "2", 
			"ID=" => "2", 
			"ISMAP=" => "2", 
			"LABEL=" => "2", 
			"LANG=" => "2", 
			"LANGUAGE=" => "2", 
			"LINK=" => "2", 
			"LOOP=" => "2", 
			"LONGDESC=" => "2", 
			"LEFTMARGIN=" => "2", 
			"MAILTO=" => "2", 
			"MARGINHEIGHT=" => "2", 
			"MARGINWIDTH=" => "2", 
			"MAXLENGTH=" => "2", 
			"MEDIA=" => "2", 
			"METHOD=" => "2", 
			"MULTIPLE" => "2", 
			"NAME=" => "2", 
			"NOHREF" => "2", 
			"NORESIZE" => "2", 
			"NOSHADE" => "2", 
			"OBJECT=" => "2", 
			"ONBLUR=" => "2", 
			"ONCHANGE=" => "2", 
			"ONFOCUS=" => "2", 
			"ONKEYDOWN=" => "2", 
			"ONKEYPRESS=" => "2", 
			"ONKEYUP=" => "2", 
			"ONLOAD=" => "2", 
			"ONRESET=" => "2", 
			"ONSELECT=" => "2", 
			"ONSUBMIT=" => "2", 
			"ONUNLOAD=" => "2", 
			"ONCLICK=" => "2", 
			"ONDBLCLICK=" => "2", 
			"ONMOUSEDOWN=" => "2", 
			"ONMOUSEMOVE=" => "2", 
			"ONMOUSEOUT=" => "2", 
			"ONMOUSEOVER=" => "2", 
			"ONMOUSEUP=" => "2", 
			"PROFILE=" => "2", 
			"PROMPT=" => "2", 
			"READONLY" => "2", 
			"REL=" => "2", 
			"REV=" => "2", 
			"ROWS=" => "2", 
			"ROWSPAN=" => "2", 
			"RULES=" => "2", 
			"RIGHTMARGIN=" => "2", 
			"SCHEME=" => "2", 
			"SCOPE=" => "2", 
			"SCROLLING=" => "2", 
			"SELECTED" => "2", 
			"SHAPE=" => "2", 
			"SIZE=" => "2", 
			"SPAN=" => "2", 
			"SRC=" => "2", 
			"STANDBY=" => "2", 
			"START=" => "2", 
			"STYLE=" => "2", 
			"SUMMARY=" => "2", 
			"TABINDEX=" => "2", 
			"TARGET=" => "2", 
			"TEXT=" => "2", 
			"TITLE=" => "2", 
			"TOPMARGIN=" => "2", 
			"TYPE=" => "2", 
			"URL=" => "2", 
			"USEMAP=" => "2", 
			"VALIGN=" => "2", 
			"VALUE=" => "2", 
			"VALUETYPE=" => "2", 
			"VERSION=" => "2", 
			"VLINK=" => "2", 
			"VSPACE=" => "2", 
			"WIDTH=" => "2", 
			"=" => "2", 
			"<?php" => "3", 
			"<?phpphp" => "3", 
			"?>" => "3", 
			"AND" => "4", 
			"ARRAY" => "4", 
			"BREAK" => "4", 
			"CASE" => "4", 
			"CLASS" => "4", 
			"CONST" => "4", 
			"CONTINUE" => "4", 
			"DEFAULT" => "4", 
			"DIE" => "4", 
			"DO" => "4", 
			"ECHO" => "4", 
			"ELSE" => "4", 
			"ELSEIF" => "4", 
			"EMPTY" => "4", 
			"ENDFOR" => "4", 
			"ENDIF" => "4", 
			"ENDSWITCH" => "4", 
			"ENDWHILE" => "4", 
			"EVAL" => "4", 
			"EXIT" => "4", 
			"EXTENDS" => "4", 
			"FALSE" => "4", 
			"FOR" => "4", 
			"FUNCTION" => "4", 
			"GLOBAL" => "4", 
			"HIGHLIGHT_FILE" => "4", 
			"HIGHLIGHT_STRING" => "4", 
			"IF" => "4", 
			"INCLUDE" => "4", 
			"ISSET" => "4", 
			"LIST" => "4", 
			"NEW" => "4", 
			"OLD_FUNCTION" => "4", 
			"OR" => "4", 
			"PRINT" => "4", 
			"REQUIRE" => "4", 
			"RETURN" => "4", 
			"SHM_ATTACH" => "4", 
			"SHM_DETACH" => "4", 
			"SHM_GET_VAR" => "4", 
			"SHM_PUT_VAR" => "4", 
			"SHM_REMOVE" => "4", 
			"SHM_REMOVE_VAR" => "4", 
			"STATIC" => "4", 
			"SWITCH" => "4", 
			"TRUE" => "4", 
			"UNSET" => "4", 
			"VAR" => "4", 
			"WHILE" => "4", 
			"XOR" => "4", 
			"__FILE__" => "4", 
			"__LINE__" => "4", 
			"Abs" => "5", 
			"Acos" => "5", 
			"Ada_Afetch" => "5", 
			"Ada_Autocommit" => "5", 
			"Ada_Close" => "5", 
			"Ada_Closeall" => "5", 
			"Ada_Commit" => "5", 
			"Ada_Connect" => "5", 
			"Ada_Exec" => "5", 
			"Ada_Fetchrow" => "5", 
			"Ada_Fieldlen" => "5", 
			"Ada_Fieldname" => "5", 
			"Ada_Fieldtype" => "5", 
			"Ada_Freeresult" => "5", 
			"Ada_Numfields" => "5", 
			"Ada_Numrows" => "5", 
			"Ada_Result" => "5", 
			"Ada_Resultall" => "5", 
			"Ada_Rollback" => "5", 
			"Addslashes" => "5", 
			"Apache_Lookup_Uri" => "5", 
			"Apache_Note" => "5", 
			"Array_Walk" => "5", 
			"Arsort" => "5", 
			"Asin" => "5", 
			"Asort" => "5", 
			"Atan" => "5", 
			"Atan2" => "5", 
			"Base64_Decode" => "5", 
			"Base64_Encode" => "5", 
			"Basename" => "5", 
			"Base_Convert" => "5", 
			"Bcadd" => "5", 
			"Bccomp" => "5", 
			"Bcdiv" => "5", 
			"Bcmod" => "5", 
			"Bcmul" => "5", 
			"Bcpow" => "5", 
			"Bcscale" => "5", 
			"Bcsqrt" => "5", 
			"Bcsub" => "5", 
			"Bindec" => "5", 
			"Call_User_Func" => "5", 
			"Call_User_Method" => "5", 
			"Ceil" => "5", 
			"Chdir" => "5", 
			"Checkdate" => "5", 
			"Checkdnsrr" => "5", 
			"Chgrp" => "5", 
			"Chmod" => "5", 
			"Chop" => "5", 
			"Chown" => "5", 
			"Chr" => "5", 
			"Chunk_Split" => "5", 
			"Clearstatcache" => "5", 
			"Closedir" => "5", 
			"Closelog" => "5", 
			"Com_Get" => "5", 
			"Com_Invoke" => "5", 
			"Com_Load" => "5", 
			"Com_Propget" => "5", 
			"Com_Propput" => "5", 
			"Com_Propset" => "5", 
			"Com_Set" => "5", 
			"Convert_Cyr_String" => "5", 
			"Copy" => "5", 
			"Cos" => "5", 
			"Count" => "5", 
			"Crypt" => "5", 
			"Current" => "5", 
			"Date" => "5", 
			"Dav_Set_Mkcol_Handlers" => "5", 
			"Dbase_Add_Record" => "5", 
			"Dbase_Close" => "5", 
			"Dbase_Create" => "5", 
			"Dbase_Delete_Record" => "5", 
			"Dbase_Get_Record" => "5", 
			"Dbase_Get_Record_With_Names" => "5", 
			"Dbase_Numfields" => "5", 
			"Dbase_Numrecords" => "5", 
			"Dbase_Open" => "5", 
			"Dbase_Pack" => "5", 
			"Dblist" => "5", 
			"Dbmclose" => "5", 
			"Dbmdelete" => "5", 
			"Dbmexists" => "5", 
			"Dbmfetch" => "5", 
			"Dbmfirstkey" => "5", 
			"Dbminsert" => "5", 
			"Dbmnextkey" => "5", 
			"Dbmopen" => "5", 
			"Dbmreplace" => "5", 
			"Debugger_Off" => "5", 
			"Debugger_On" => "5", 
			"Decbin" => "5", 
			"Dechex" => "5", 
			"Decoct" => "5", 
			"Decrypt" => "5", 
			"Define" => "5", 
			"Defined" => "5", 
			"Define_Syslog_Variables" => "5", 
			"Deg2Rad" => "5", 
			"Dir" => "5", 
			"Dirname" => "5", 
			"Dl" => "5", 
			"Doubleval" => "5", 
			"Each" => "5", 
			"Encrypt" => "5", 
			"End" => "5", 
			"Ereg" => "5", 
			"Eregi" => "5", 
			"Eregi_Replace" => "5", 
			"Ereg_Replace" => "5", 
			"Error_Log" => "5", 
			"Error_Reporting" => "5", 
			"Escapeshellcmd" => "5", 
			"Exec" => "5", 
			"Exp" => "5", 
			"Explode" => "5", 
			"Fclose" => "5", 
			"Fdf_Close" => "5", 
			"Fdf_Create" => "5", 
			"Fdf_Get_File" => "5", 
			"Fdf_Get_Status" => "5", 
			"Fdf_Get_Value" => "5", 
			"Fdf_Next_Field_Name" => "5", 
			"Fdf_Open" => "5", 
			"Fdf_Save" => "5", 
			"Fdf_Set_Ap" => "5", 
			"Fdf_Set_File" => "5", 
			"Fdf_Set_Status" => "5", 
			"Fdf_Set_Value" => "5", 
			"Feof" => "5", 
			"Fgetc" => "5", 
			"Fgets" => "5", 
			"Fgetss" => "5", 
			"File" => "5", 
			"Fileatime" => "5", 
			"Filectime" => "5", 
			"Filegroup" => "5", 
			"Fileinode" => "5", 
			"Filemtime" => "5", 
			"Fileowner" => "5", 
			"Fileperms" => "5", 
			"Filepro" => "5", 
			"Filepro_Fieldcount" => "5", 
			"Filepro_Fieldname" => "5", 
			"Filepro_Fieldtype" => "5", 
			"Filepro_Fieldwidth" => "5", 
			"Filepro_Retrieve" => "5", 
			"Filepro_Rowcount" => "5", 
			"Filesize" => "5", 
			"Filetype" => "5", 
			"File_Exists" => "5", 
			"Floor" => "5", 
			"Flush" => "5", 
			"Fopen" => "5", 
			"Fpassthru" => "5", 
			"Fputs" => "5", 
			"Fread" => "5", 
			"Frenchtojd" => "5", 
			"Fseek" => "5", 
			"Fsockopen" => "5", 
			"Ftell" => "5", 
			"Fwrite" => "5", 
			"Getallheaders" => "5", 
			"Getdate" => "5", 
			"Getenv" => "5", 
			"Gethostbyaddr" => "5", 
			"Gethostbyname" => "5", 
			"Gethostbynamel" => "5", 
			"Getimagesize" => "5", 
			"Getlastaccess" => "5", 
			"Getlastbrowser" => "5", 
			"Getlastemail" => "5", 
			"Getlasthost" => "5", 
			"Getlastmod" => "5", 
			"Getlastref" => "5", 
			"Getlogdir" => "5", 
			"Getloghost" => "5", 
			"Getmxrr" => "5", 
			"Getmyiid" => "5", 
			"Getmyinode" => "5", 
			"Getmypid" => "5", 
			"Getmyuid" => "5", 
			"Getrandmax" => "5", 
			"Getrusage" => "5", 
			"Getstartlogging" => "5", 
			"Gettimeofday" => "5", 
			"Gettoday" => "5", 
			"Gettotal" => "5", 
			"Gettype" => "5", 
			"Get_Browser" => "5", 
			"Get_Cfg_Var" => "5", 
			"Get_Current_User" => "5", 
			"Get_Magic_Quotes_Gpc" => "5", 
			"Get_Magic_Quotes_Runtime" => "5", 
			"Get_Meta_Tags" => "5", 
			"Gmdate" => "5", 
			"Gmmktime" => "5", 
			"Gregoriantojd" => "5", 
			"Gzclose" => "5", 
			"Gzeof" => "5", 
			"Gzfile" => "5", 
			"Gzgetc" => "5", 
			"Gzgets" => "5", 
			"Gzgetss" => "5", 
			"Gzopen" => "5", 
			"Gzpassthru" => "5", 
			"Gzputs" => "5", 
			"Gzread" => "5", 
			"Gzrewind" => "5", 
			"Gzseek" => "5", 
			"Gztell" => "5", 
			"Gzwrite" => "5", 
			"Header" => "5", 
			"Hebrev" => "5", 
			"Hebrevc" => "5", 
			"Hexdec" => "5", 
			"Htmlentities" => "5", 
			"Htmlspecialchars" => "5", 
			"Hw_Array2Objrec" => "5", 
			"Hw_Changeobject" => "5", 
			"Hw_Children" => "5", 
			"Hw_Childrenobj" => "5", 
			"Hw_Close" => "5", 
			"Hw_Connect" => "5", 
			"Hw_Connection_Info" => "5", 
			"Hw_Cp" => "5", 
			"Hw_Deleteobject" => "5", 
			"Hw_Docbyanchor" => "5", 
			"Hw_Docbyanchorobj" => "5", 
			"Hw_Documentattributes" => "5", 
			"Hw_Documentbodytag" => "5", 
			"Hw_Documentsize" => "5", 
			"Hw_Document_Attributes" => "5", 
			"Hw_Document_Bodytag" => "5", 
			"Hw_Document_Content" => "5", 
			"Hw_Document_Size" => "5", 
			"Hw_Dummy" => "5", 
			"Hw_Edittext" => "5", 
			"Hw_Error" => "5", 
			"Hw_Errormsg" => "5", 
			"Hw_Free_Document" => "5", 
			"Hw_Getanchors" => "5", 
			"Hw_Getanchorsobj" => "5", 
			"Hw_Getandlock" => "5", 
			"Hw_Getcgi" => "5", 
			"Hw_Getchildcoll" => "5", 
			"Hw_Getchildcollobj" => "5", 
			"Hw_Getchilddoccoll" => "5", 
			"Hw_Getchilddoccollobj" => "5", 
			"Hw_Getobject" => "5", 
			"Hw_Getobjectbyquery" => "5", 
			"Hw_Getobjectbyquerycoll" => "5", 
			"Hw_Getobjectbyquerycollobj" => "5", 
			"Hw_Getobjectbyqueryobj" => "5", 
			"Hw_Getparents" => "5", 
			"Hw_Getparentsobj" => "5", 
			"Hw_Getrellink" => "5", 
			"Hw_Getremote" => "5", 
			"Hw_Getremotechildren" => "5", 
			"Hw_Getsrcbydestobj" => "5", 
			"Hw_Gettext" => "5", 
			"Hw_Getusername" => "5", 
			"Hw_Identify" => "5", 
			"Hw_Incollections" => "5", 
			"Hw_Info" => "5", 
			"Hw_Inscoll" => "5", 
			"Hw_Insdoc" => "5", 
			"Hw_Insertdocument" => "5", 
			"Hw_Insertobject" => "5", 
			"Hw_Mv" => "5", 
			"Hw_New_Document" => "5", 
			"Hw_Objrec2Array" => "5", 
			"Hw_Outputdocument" => "5", 
			"Hw_Output_Document" => "5", 
			"Hw_Pconnect" => "5", 
			"Hw_Pipecgi" => "5", 
			"Hw_Pipedocument" => "5", 
			"Hw_Root" => "5", 
			"Hw_Setlinkroot" => "5", 
			"Hw_Stat" => "5", 
			"Hw_Unlock" => "5", 
			"Hw_Who" => "5", 
			"Ibase_Bind" => "5", 
			"Ibase_Close" => "5", 
			"Ibase_Connect" => "5", 
			"Ibase_Execute" => "5", 
			"Ibase_Fetch_Row" => "5", 
			"Ibase_Free_Query" => "5", 
			"Ibase_Free_Result" => "5", 
			"Ibase_Pconnect" => "5", 
			"Ibase_Prepare" => "5", 
			"Ibase_Query" => "5", 
			"Ibase_Timefmt" => "5", 
			"Ifxus_Close_Slob" => "5", 
			"Ifxus_Create_Slob" => "5", 
			"Ifxus_Free_Slob" => "5", 
			"Ifxus_Open_Slob" => "5", 
			"Ifxus_Read_Slob" => "5", 
			"Ifxus_Seek_Slob" => "5", 
			"Ifxus_Tell_Slob" => "5", 
			"Ifxus_Write_Slob" => "5", 
			"Ifx_Affected_Rows" => "5", 
			"Ifx_Blobinfile_Mode" => "5", 
			"Ifx_Byteasvarchar" => "5", 
			"Ifx_Close" => "5", 
			"Ifx_Connect" => "5", 
			"Ifx_Copy_Blob" => "5", 
			"Ifx_Create_Blob" => "5", 
			"Ifx_Create_Char" => "5", 
			"Ifx_Do" => "5", 
			"Ifx_Error" => "5", 
			"Ifx_Errormsg" => "5", 
			"Ifx_Fetch_Row" => "5", 
			"Ifx_Fieldproperties" => "5", 
			"Ifx_Fieldtypes" => "5", 
			"Ifx_Free_Blob" => "5", 
			"Ifx_Free_Char" => "5", 
			"Ifx_Free_Result" => "5", 
			"Ifx_Get_Blob" => "5", 
			"Ifx_Get_Char" => "5", 
			"Ifx_Htmltbl_Result" => "5", 
			"Ifx_Nullformat" => "5", 
			"Ifx_Num_Fields" => "5", 
			"Ifx_Num_Rows" => "5", 
			"Ifx_Pconnect" => "5", 
			"Ifx_Prepare" => "5", 
			"Ifx_Query" => "5", 
			"Ifx_Textasvarchar" => "5", 
			"Ifx_Update_Blob" => "5", 
			"Ifx_Update_Char" => "5", 
			"Imagearc" => "5", 
			"Imagechar" => "5", 
			"Imagecharup" => "5", 
			"Imagecolorallocate" => "5", 
			"Imagecolorat" => "5", 
			"Imagecolorclosest" => "5", 
			"Imagecolordeallocate" => "5", 
			"Imagecolorexact" => "5", 
			"Imagecolorresolve" => "5", 
			"Imagecolorset" => "5", 
			"Imagecolorsforindex" => "5", 
			"Imagecolorstotal" => "5", 
			"Imagecolortransparent" => "5", 
			"Imagecopy" => "5", 
			"Imagecopyresized" => "5", 
			"Imagecreate" => "5", 
			"Imagecreatefromgif" => "5", 
			"Imagedashedline" => "5", 
			"Imagedestroy" => "5", 
			"Imagefill" => "5", 
			"Imagefilledpolygon" => "5", 
			"Imagefilledrectangle" => "5", 
			"Imagefilltoborder" => "5", 
			"Imagefontheight" => "5", 
			"Imagefontwidth" => "5", 
			"Imagegif" => "5", 
			"Imageinterlace" => "5", 
			"Imageline" => "5", 
			"Imageloadfont" => "5", 
			"Imagepolygon" => "5", 
			"Imagerectangle" => "5", 
			"Imagesetpixel" => "5", 
			"Imagestring" => "5", 
			"Imagestringup" => "5", 
			"Imagesx" => "5", 
			"Imagesy" => "5", 
			"Imagettfbbox" => "5", 
			"Imagettftext" => "5", 
			"Imap_8Bit" => "5", 
			"Imap_Append" => "5", 
			"Imap_Base64" => "5", 
			"Imap_Binary" => "5", 
			"Imap_Body" => "5", 
			"Imap_Bodystruct" => "5", 
			"Imap_Check" => "5", 
			"Imap_Clearflag_Full" => "5", 
			"Imap_Close" => "5", 
			"Imap_Create" => "5", 
			"Imap_Createmailbox" => "5", 
			"Imap_Delete" => "5", 
			"Imap_Deletemailbox" => "5", 
			"Imap_Expunge" => "5", 
			"Imap_Fetchbody" => "5", 
			"Imap_Fetchheader" => "5", 
			"Imap_Fetchstructure" => "5", 
			"Imap_Fetchtext" => "5", 
			"Imap_Fetch_Overview" => "5", 
			"Imap_Header" => "5", 
			"Imap_Headerinfo" => "5", 
			"Imap_Headers" => "5", 
			"Imap_List" => "5", 
			"Imap_Listmailbox" => "5", 
			"Imap_Listsubscribed" => "5", 
			"Imap_Lsub" => "5", 
			"Imap_Mailboxmsginfo" => "5", 
			"Imap_Mail_Compose" => "5", 
			"Imap_Mail_Copy" => "5", 
			"Imap_Mail_Move" => "5", 
			"Imap_Msgno" => "5", 
			"Imap_Num_Msg" => "5", 
			"Imap_Num_Recent" => "5", 
			"Imap_Open" => "5", 
			"Imap_Ping" => "5", 
			"Imap_Qprint" => "5", 
			"Imap_Rename" => "5", 
			"Imap_Renamemailbox" => "5", 
			"Imap_Reopen" => "5", 
			"Imap_Rfc822_Parse_Adrlist" => "5", 
			"Imap_Rfc822_Write_Address" => "5", 
			"Imap_Scan" => "5", 
			"Imap_Scanmailbox" => "5", 
			"Imap_Setflag_Full" => "5", 
			"Imap_Sort" => "5", 
			"Imap_Status" => "5", 
			"Imap_Subscribe" => "5", 
			"Imap_Uid" => "5", 
			"Imap_Undelete" => "5", 
			"Imap_Unsubscribe" => "5", 
			"Implode" => "5", 
			"Intval" => "5", 
			"Iptcparse" => "5", 
			"Is_Array" => "5", 
			"Is_Dir" => "5", 
			"Is_Double" => "5", 
			"Is_Executable" => "5", 
			"Is_File" => "5", 
			"Is_Float" => "5", 
			"Is_Int" => "5", 
			"Is_Integer" => "5", 
			"Is_Link" => "5", 
			"Is_Long" => "5", 
			"Is_Object" => "5", 
			"Is_Readable" => "5", 
			"Is_Real" => "5", 
			"Is_String" => "5", 
			"Is_Writeable" => "5", 
			"Jddayofweek" => "5", 
			"Jdmonthname" => "5", 
			"Jdtofrench" => "5", 
			"Jdtogregorian" => "5", 
			"Jdtojewish" => "5", 
			"Jdtojulian" => "5", 
			"Jewishtojd" => "5", 
			"Join" => "5", 
			"Juliantojd" => "5", 
			"Key" => "5", 
			"Ksort" => "5", 
			"Ldap_Add" => "5", 
			"Ldap_Bind" => "5", 
			"Ldap_Close" => "5", 
			"Ldap_Connect" => "5", 
			"Ldap_Count_Entries" => "5", 
			"Ldap_Delete" => "5", 
			"Ldap_Dn2Ufn" => "5", 
			"Ldap_Explode_Dn" => "5", 
			"Ldap_First_Attribute" => "5", 
			"Ldap_First_Entry" => "5", 
			"Ldap_Free_Result" => "5", 
			"Ldap_Get_Attributes" => "5", 
			"Ldap_Get_Dn" => "5", 
			"Ldap_Get_Entries" => "5", 
			"Ldap_Get_Values" => "5", 
			"Ldap_List" => "5", 
			"Ldap_Modify" => "5", 
			"Ldap_Next_Attribute" => "5", 
			"Ldap_Next_Entry" => "5", 
			"Ldap_Read" => "5", 
			"Ldap_Search" => "5", 
			"Ldap_Unbind" => "5", 
			"Leak" => "5", 
			"Link" => "5", 
			"Linkinfo" => "5", 
			"Log" => "5", 
			"Log10" => "5", 
			"Logas" => "5", 
			"Lstat" => "5", 
			"Ltrim" => "5", 
			"Magic_Quotes_Runtime" => "5", 
			"Mail" => "5", 
			"Max" => "5", 
			"Md5" => "5", 
			"Microtime" => "5", 
			"Min" => "5", 
			"Mkdir" => "5", 
			"Mktime" => "5", 
			"Msql" => "5", 
			"Msql_Affected_Rows" => "5", 
			"Msql_Close" => "5", 
			"Msql_Connect" => "5", 
			"Msql_Createdb" => "5", 
			"Msql_Create_Db" => "5", 
			"Msql_Data_Seek" => "5", 
			"Msql_Dbname" => "5", 
			"Msql_Db_Query" => "5", 
			"Msql_Dropdb" => "5", 
			"Msql_Drop_Db" => "5", 
			"Msql_Error" => "5", 
			"Msql_Fetch_Array" => "5", 
			"Msql_Fetch_Field" => "5", 
			"Msql_Fetch_Object" => "5", 
			"Msql_Fetch_Row" => "5", 
			"Msql_Fieldflags" => "5", 
			"Msql_Fieldlen" => "5", 
			"Msql_Fieldname" => "5", 
			"Msql_Fieldtable" => "5", 
			"Msql_Fieldtype" => "5", 
			"Msql_Field_Seek" => "5", 
			"Msql_Freeresult" => "5", 
			"Msql_Free_Result" => "5", 
			"Msql_Listdbs" => "5", 
			"Msql_Listfields" => "5", 
			"Msql_Listtables" => "5", 
			"Msql_List_Dbs" => "5", 
			"Msql_List_Fields" => "5", 
			"Msql_List_Tables" => "5", 
			"Msql_Numfields" => "5", 
			"Msql_Numrows" => "5", 
			"Msql_Num_Fields" => "5", 
			"Msql_Num_Rows" => "5", 
			"Msql_Pconnect" => "5", 
			"Msql_Query" => "5", 
			"Msql_Regcase" => "5", 
			"Msql_Result" => "5", 
			"Msql_Selectdb" => "5", 
			"Msql_Select_Db" => "5", 
			"Msql_Tablename" => "5", 
			"Mssql_Affected_Rows" => "5", 
			"Mssql_Close" => "5", 
			"Mssql_Connect" => "5", 
			"Mssql_Data_Seek" => "5", 
			"Mssql_Fetch_Array" => "5", 
			"Mssql_Fetch_Field" => "5", 
			"Mssql_Fetch_Object" => "5", 
			"Mssql_Fetch_Row" => "5", 
			"Mssql_Field_Length" => "5", 
			"Mssql_Field_Name" => "5", 
			"Mssql_Field_Seek" => "5", 
			"Mssql_Field_Type" => "5", 
			"Mssql_Free_Result" => "5", 
			"Mssql_Get_Last_Message" => "5", 
			"Mssql_Min_Client_Severity" => "5", 
			"Mssql_Min_Error_Severity" => "5", 
			"Mssql_Min_Message_Severity" => "5", 
			"Mssql_Min_Server_Severity" => "5", 
			"Mssql_Num_Fields" => "5", 
			"Mssql_Num_Rows" => "5", 
			"Mssql_Pconnect" => "5", 
			"Mssql_Query" => "5", 
			"Mssql_Result" => "5", 
			"Mssql_Select_Db" => "5", 
			"Mt_Getrandmax" => "5", 
			"Mt_Rand" => "5", 
			"Mt_Srand" => "5", 
			"Mysql" => "5", 
			"Mysql_Affected_Rows" => "5", 
			"Mysql_Close" => "5", 
			"Mysql_Connect" => "5", 
			"Mysql_Createdb" => "5", 
			"Mysql_Create_Db" => "5", 
			"Mysql_Data_Seek" => "5", 
			"Mysql_Dbname" => "5", 
			"Mysql_Db_Name" => "5", 
			"Mysql_Db_Query" => "5", 
			"Mysql_Dropdb" => "5", 
			"Mysql_Drop_Db" => "5", 
			"Mysql_Errno" => "5", 
			"Mysql_Error" => "5", 
			"Mysql_Fetch_Array" => "5", 
			"Mysql_Fetch_Field" => "5", 
			"Mysql_Fetch_Lengths" => "5", 
			"Mysql_Fetch_Object" => "5", 
			"Mysql_Fetch_Row" => "5", 
			"Mysql_Fieldflags" => "5", 
			"Mysql_Fieldlen" => "5", 
			"Mysql_Fieldname" => "5", 
			"Mysql_Fieldtable" => "5", 
			"Mysql_Fieldtype" => "5", 
			"Mysql_Field_Flags" => "5", 
			"Mysql_Field_Len" => "5", 
			"Mysql_Field_Name" => "5", 
			"Mysql_Field_Seek" => "5", 
			"Mysql_Field_Table" => "5", 
			"Mysql_Field_Type" => "5", 
			"Mysql_Freeresult" => "5", 
			"Mysql_Free_Result" => "5", 
			"Mysql_Insert_Id" => "5", 
			"Mysql_Listdbs" => "5", 
			"Mysql_Listfields" => "5", 
			"Mysql_Listtables" => "5", 
			"Mysql_List_Dbs" => "5", 
			"Mysql_List_Fields" => "5", 
			"Mysql_List_Tables" => "5", 
			"Mysql_Numfields" => "5", 
			"Mysql_Numrows" => "5", 
			"Mysql_Num_Fields" => "5", 
			"Mysql_Num_Rows" => "5", 
			"Mysql_Pconnect" => "5", 
			"Mysql_Query" => "5", 
			"Mysql_Result" => "5", 
			"Mysql_Selectdb" => "5", 
			"Mysql_Select_Db" => "5", 
			"Mysql_Tablename" => "5", 
			"Next" => "5", 
			"Nl2Br" => "5", 
			"Number_Format" => "5", 
			"Ocibindbyname" => "5", 
			"Ocicolumnisnull" => "5", 
			"Ocicolumnname" => "5", 
			"Ocicolumnsize" => "5", 
			"Ocicolumntype" => "5", 
			"Ociexecute" => "5", 
			"Ocifetch" => "5", 
			"Ocifetchinto" => "5", 
			"Ocifreestatement" => "5", 
			"Ociinternaldebug" => "5", 
			"Ocilogoff" => "5", 
			"Ocilogon" => "5", 
			"Ocinumcols" => "5", 
			"Ociparse" => "5", 
			"Ociresult" => "5", 
			"Ociserverversion" => "5", 
			"Ocistatementtype" => "5", 
			"Octdec" => "5", 
			"Odbc_Autocommit" => "5", 
			"Odbc_Binmode" => "5", 
			"Odbc_Close" => "5", 
			"Odbc_Close_All" => "5", 
			"Odbc_Commit" => "5", 
			"Odbc_Connect" => "5", 
			"Odbc_Cursor" => "5", 
			"Odbc_Do" => "5", 
			"Odbc_Exec" => "5", 
			"Odbc_Execute" => "5", 
			"Odbc_Fetch_Into" => "5", 
			"Odbc_Fetch_Row" => "5", 
			"Odbc_Field_Len" => "5", 
			"Odbc_Field_Name" => "5", 
			"Odbc_Field_Num" => "5", 
			"Odbc_Field_Type" => "5", 
			"Odbc_Free_Result" => "5", 
			"Odbc_Longreadlen" => "5", 
			"Odbc_Num_Fields" => "5", 
			"Odbc_Num_Rows" => "5", 
			"Odbc_Pconnect" => "5", 
			"Odbc_Prepare" => "5", 
			"Odbc_Result" => "5", 
			"Odbc_Result_All" => "5", 
			"Odbc_Rollback" => "5", 
			"Odbc_Setoption" => "5", 
			"Opendir" => "5", 
			"Openlog" => "5", 
			"Ora_Bind" => "5", 
			"Ora_Close" => "5", 
			"Ora_Columnname" => "5", 
			"Ora_Columnsize" => "5", 
			"Ora_Columntype" => "5", 
			"Ora_Commit" => "5", 
			"Ora_Commitoff" => "5", 
			"Ora_Commiton" => "5", 
			"Ora_Do" => "5", 
			"Ora_Error" => "5", 
			"Ora_Errorcode" => "5", 
			"Ora_Exec" => "5", 
			"Ora_Fetch" => "5", 
			"Ora_Fetch_Into" => "5", 
			"Ora_Getcolumn" => "5", 
			"Ora_Logoff" => "5", 
			"Ora_Logon" => "5", 
			"Ora_Numcols" => "5", 
			"Ora_Numrows" => "5", 
			"Ora_Open" => "5", 
			"Ora_Parse" => "5", 
			"Ora_Plogon" => "5", 
			"Ora_Rollback" => "5", 
			"Ord" => "5", 
			"Pack" => "5", 
			"Parse_Str" => "5", 
			"Parse_Url" => "5", 
			"Passthru" => "5", 
			"Pclose" => "5", 
			"Pdf_Add_Outline" => "5", 
			"Pdf_Arc" => "5", 
			"Pdf_Begin_Page" => "5", 
			"Pdf_Circle" => "5", 
			"Pdf_Clip" => "5", 
			"Pdf_Close" => "5", 
			"Pdf_Closepath" => "5", 
			"Pdf_Closepath_Fill_Stroke" => "5", 
			"Pdf_Closepath_Stroke" => "5", 
			"Pdf_Continue_Text" => "5", 
			"Pdf_Curveto" => "5", 
			"Pdf_Endpath" => "5", 
			"Pdf_End_Page" => "5", 
			"Pdf_Fill" => "5", 
			"Pdf_Fill_Stroke" => "5", 
			"Pdf_Get_Info" => "5", 
			"Pdf_Lineto" => "5", 
			"Pdf_Moveto" => "5", 
			"Pdf_Open" => "5", 
			"Pdf_Rect" => "5", 
			"Pdf_Restore" => "5", 
			"Pdf_Rotate" => "5", 
			"Pdf_Save" => "5", 
			"Pdf_Scale" => "5", 
			"Pdf_Setdash" => "5", 
			"Pdf_Setflat" => "5", 
			"Pdf_Setgray" => "5", 
			"Pdf_Setgray_Fill" => "5", 
			"Pdf_Setgray_Stroke" => "5", 
			"Pdf_Setlinecap" => "5", 
			"Pdf_Setlinejoin" => "5", 
			"Pdf_Setlinewidth" => "5", 
			"Pdf_Setmiterlimit" => "5", 
			"Pdf_Setrgbcolor" => "5", 
			"Pdf_Setrgbcolor_Fill" => "5", 
			"Pdf_Setrgbcolor_Stroke" => "5", 
			"Pdf_Set_Char_Spacing" => "5", 
			"Pdf_Set_Duration" => "5", 
			"Pdf_Set_Font" => "5", 
			"Pdf_Set_Horiz_Scaling" => "5", 
			"Pdf_Set_Info_Author" => "5", 
			"Pdf_Set_Info_Creator" => "5", 
			"Pdf_Set_Info_Keywords" => "5", 
			"Pdf_Set_Info_Subject" => "5", 
			"Pdf_Set_Info_Title" => "5", 
			"Pdf_Set_Leading" => "5", 
			"Pdf_Set_Text_Matrix" => "5", 
			"Pdf_Set_Text_Pos" => "5", 
			"Pdf_Set_Text_Rendering" => "5", 
			"Pdf_Set_Text_Rise" => "5", 
			"Pdf_Set_Transition" => "5", 
			"Pdf_Set_Word_Spacing" => "5", 
			"Pdf_Show" => "5", 
			"Pdf_Show_Xy" => "5", 
			"Pdf_Stringwidth" => "5", 
			"Pdf_Stroke" => "5", 
			"Pdf_Translate" => "5", 
			"Pg_Close" => "5", 
			"Pg_Cmdtuples" => "5", 
			"Pg_Connect" => "5", 
			"Pg_Dbname" => "5", 
			"Pg_Errormessage" => "5", 
			"Pg_Exec" => "5", 
			"Pg_Fetch_Array" => "5", 
			"Pg_Fetch_Object" => "5", 
			"Pg_Fetch_Row" => "5", 
			"Pg_Fieldisnull" => "5", 
			"Pg_Fieldname" => "5", 
			"Pg_Fieldnum" => "5", 
			"Pg_Fieldprtlen" => "5", 
			"Pg_Fieldsize" => "5", 
			"Pg_Fieldtype" => "5", 
			"Pg_Freeresult" => "5", 
			"Pg_Getlastoid" => "5", 
			"Pg_Host" => "5", 
			"Pg_Loclose" => "5", 
			"Pg_Locreate" => "5", 
			"Pg_Loopen" => "5", 
			"Pg_Loread" => "5", 
			"Pg_Loreadall" => "5", 
			"Pg_Lounlink" => "5", 
			"Pg_Lowrite" => "5", 
			"Pg_Numfields" => "5", 
			"Pg_Numrows" => "5", 
			"Pg_Options" => "5", 
			"Pg_Pconnect" => "5", 
			"Pg_Port" => "5", 
			"Pg_Result" => "5", 
			"Pg_Tty" => "5", 
			"Phpinfo" => "5", 
			"Phpversion" => "5", 
			"Pi" => "5", 
			"Popen" => "5", 
			"Pos" => "5", 
			"Pow" => "5", 
			"Prev" => "5", 
			"Printf" => "5", 
			"Putenv" => "5", 
			"Quoted_Printable_Decode" => "5", 
			"Quotemeta" => "5", 
			"Rad2Deg" => "5", 
			"Rand" => "5", 
			"Rawurldecode" => "5", 
			"Rawurlencode" => "5", 
			"Readdir" => "5", 
			"Readfile" => "5", 
			"Readgzfile" => "5", 
			"Readlink" => "5", 
			"Register_Shutdown_Function" => "5", 
			"Rename" => "5", 
			"Reset" => "5", 
			"Rewind" => "5", 
			"Rewinddir" => "5", 
			"Rmdir" => "5", 
			"Round" => "5", 
			"Rsort" => "5", 
			"Rtrim" => "5", 
			"Sem_Acquire" => "5", 
			"Sem_Get" => "5", 
			"Sem_Release" => "5", 
			"Serialize" => "5", 
			"Setcookie" => "5", 
			"Setlocale" => "5", 
			"Settype" => "5", 
			"Set_Magic_Quotes_Runtime" => "5", 
			"Set_Socket_Blocking" => "5", 
			"Set_Socket_Timeout" => "5", 
			"Set_Time_Limit" => "5", 
			"Short_Tags" => "5", 
			"Sin" => "5", 
			"Sizeof" => "5", 
			"Sleep" => "5", 
			"Snmpget" => "5", 
			"Snmpwalk" => "5", 
			"Solid_Close" => "5", 
			"Solid_Connect" => "5", 
			"Solid_Exec" => "5", 
			"Solid_Fetchrow" => "5", 
			"Solid_Fetch_Prev" => "5", 
			"Solid_Fieldname" => "5", 
			"Solid_Fieldnum" => "5", 
			"Solid_Freeresult" => "5", 
			"Solid_Numfields" => "5", 
			"Solid_Numrows" => "5", 
			"Solid_Result" => "5", 
			"Sort" => "5", 
			"Soundex" => "5", 
			"Split" => "5", 
			"Sprintf" => "5", 
			"Sqlconnect" => "5", 
			"Sqldisconnect" => "5", 
			"Sqlexecdirect" => "5", 
			"Sqlfetch" => "5", 
			"Sqlfree" => "5", 
			"Sqlgetdata" => "5", 
			"Sqlrowcount" => "5", 
			"Sql_Regcase" => "5", 
			"Sqrt" => "5", 
			"Srand" => "5", 
			"Stat" => "5", 
			"Strcasecmp" => "5", 
			"Strchr" => "5", 
			"Strcmp" => "5", 
			"Strcspn" => "5", 
			"Strftime" => "5", 
			"Stripslashes" => "5", 
			"Stristr" => "5", 
			"Strlen" => "5", 
			"Strpos" => "5", 
			"Strrchr" => "5", 
			"Strrev" => "5", 
			"Strrpos" => "5", 
			"Strspn" => "5", 
			"Strstr" => "5", 
			"Strtok" => "5", 
			"Strtolower" => "5", 
			"Strtoupper" => "5", 
			"Strtr" => "5", 
			"Strval" => "5", 
			"Str_Replace" => "5", 
			"Substr" => "5", 
			"Sybase_Affected_Rows" => "5", 
			"Sybase_Close" => "5", 
			"Sybase_Connect" => "5", 
			"Sybase_Data_Seek" => "5", 
			"Sybase_Fetch_Array" => "5", 
			"Sybase_Fetch_Field" => "5", 
			"Sybase_Fetch_Object" => "5", 
			"Sybase_Fetch_Row" => "5", 
			"Sybase_Field_Seek" => "5", 
			"Sybase_Free_Result" => "5", 
			"Sybase_Get_Last_Message" => "5", 
			"Sybase_Min_Client_Severity" => "5", 
			"Sybase_Min_Error_Severity" => "5", 
			"Sybase_Min_Message_Severity" => "5", 
			"Sybase_Min_Server_Severity" => "5", 
			"Sybase_Num_Fields" => "5", 
			"Sybase_Num_Rows" => "5", 
			"Sybase_Pconnect" => "5", 
			"Sybase_Query" => "5", 
			"Sybase_Result" => "5", 
			"Sybase_Select_Db" => "5", 
			"Symlink" => "5", 
			"Syslog" => "5", 
			"System" => "5", 
			"Tan" => "5", 
			"Tempnam" => "5", 
			"Time" => "5", 
			"Touch" => "5", 
			"Trim" => "5", 
			"Uasort" => "5", 
			"Ucfirst" => "5", 
			"Ucwords" => "5", 
			"Uksort" => "5", 
			"Umask" => "5", 
			"Uniqid" => "5", 
			"Unlink" => "5", 
			"Unpack" => "5", 
			"Unserialize" => "5", 
			"Urldecode" => "5", 
			"Urlencode" => "5", 
			"Usleep" => "5", 
			"Usort" => "5", 
			"Utf8_Decode" => "5", 
			"Utf8_Encode" => "5", 
			"Var_Dump" => "5", 
			"Velocis_Autocommit" => "5", 
			"Velocis_Close" => "5", 
			"Velocis_Commit" => "5", 
			"Velocis_Connect" => "5", 
			"Velocis_Exec" => "5", 
			"Velocis_Fetch" => "5", 
			"Velocis_Fieldname" => "5", 
			"Velocis_Fieldnum" => "5", 
			"Velocis_Freeresult" => "5", 
			"Velocis_Off_Autocommit" => "5", 
			"Velocis_Result" => "5", 
			"Velocis_Rollback" => "5", 
			"Virtual" => "5", 
			"Vm_Addalias" => "5", 
			"Vm_Adduser" => "5", 
			"Vm_Delalias" => "5", 
			"Vm_Deluser" => "5", 
			"Vm_Passwd" => "5", 
			"Xml_Error_String" => "5", 
			"Xml_Get_Current_Byte_Index" => "5", 
			"Xml_Get_Current_Column_Number" => "5", 
			"Xml_Get_Current_Line_Number" => "5", 
			"Xml_Get_Error_Code" => "5", 
			"Xml_Parse" => "5", 
			"Xml_Parser_Create" => "5", 
			"Xml_Parser_Free" => "5", 
			"Xml_Parser_Get_Option" => "5", 
			"Xml_Parser_Set_Option" => "5", 
			"Xml_Set_Character_Data_Handler" => "5", 
			"Xml_Set_Default_Handler" => "5", 
			"Xml_Set_Element_Handler" => "5", 
			"Xml_Set_External_Entity_Ref_Handler" => "5", 
			"Xml_Set_Notation_Decl_Handler" => "5", 
			"Xml_Set_Processing_Instruction_Handler" => "5", 
			"Xml_Set_Unparsed_Entity_Decl_Handler" => "5", 
			"+" => "6", 
			"-" => "6", 
			"%" => "6", 
			"&" => "6", 
			">" => "6", 
			"<" => "6", 
			"^" => "6", 
			"!" => "6", 
			"|" => "6", 
			"$" => "7", 
			"?" => "6", 
			"**" => "7", 
			"add" => "8", 
			"all" => "8", 
			"alter" => "8", 
			"as" => "8", 
			"asc" => "8", 
			"auto_increment" => "8", 
			"between" => "8", 
			"binary" => "8", 
			"both" => "8", 
			"by" => "8", 
			"change" => "8", 
			"check" => "8", 
			"column" => "8", 
			"columns" => "8", 
			"create" => "8", 
			"cross" => "8", 
			"data" => "8", 
			"database" => "8", 
			"databases" => "8", 
			"delayed" => "8", 
			"delete" => "8", 
			"desc" => "8", 
			"describe" => "8", 
			"distinct" => "8", 
			"drop" => "8", 
			"enclosed" => "8", 
			"escaped" => "8", 
			"exists" => "8", 
			"explain" => "8", 
			"field" => "8", 
			"fields" => "8", 
			"foreign" => "8", 
			"from" => "8", 
			"grant" => "8", 
			"group" => "8", 
			"having" => "8", 
			"identified" => "8", 
			"ignore" => "8", 
			"index" => "8", 
			"insert" => "8", 
			"infile" => "8", 
			"into" => "8", 
			"keys" => "8", 
			"kill" => "8", 
			"leading" => "8", 
			"left" => "8", 
			"like" => "8", 
			"limit" => "8", 
			"lines" => "8", 
			"load" => "8", 
			"local" => "8", 
			"lock" => "8", 
			"low_priority" => "8", 
			"modify" => "8", 
			"natural" => "8", 
			"not" => "8", 
			"NOW" => "8", 
			"null" => "8", 
			"on" => "8", 
			"optimize" => "8", 
			"option" => "8", 
			"optionally" => "8", 
			"order" => "8", 
			"outer" => "8", 
			"outfile" => "8", 
			"primary" => "8", 
			"proceedure" => "8", 
			"read" => "8", 
			"references" => "8", 
			"regexp" => "8", 
			"replace" => "8", 
			"returns" => "8", 
			"revoke" => "8", 
			"rlike" => "8", 
			"select" => "8", 
			"set" => "8", 
			"show" => "8", 
			"soname" => "8", 
			"status" => "8", 
			"straight_join" => "8", 
			"table" => "8", 
			"tables" => "8", 
			"teminated" => "8", 
			"to" => "8", 
			"TO_DAYS" => "8", 
			"trailing" => "8", 
			"unique" => "8", 
			"unlock" => "8", 
			"unsigned" => "8", 
			"update" => "8", 
			"use" => "8", 
			"using" => "8", 
			"values" => "8", 
			"variables" => "8", 
			"where" => "8", 
			"with" => "8", 
			"write" => "8", 
			"zerofill" => "8");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"7" => "donothing", 
			"8" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>

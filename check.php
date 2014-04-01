<?php
if (empty($_POST['price'])) {
    
    header('Location: http://audiome.ru');
    exit();

}
$price = (double) $_POST['price'];
	mysql_connect("db.prosou01.mass.hc.ru", "prosou01_site3", "9078563412");
	mysql_select_db("wwwprosoundru_site3");
	$r = mysql_query("SELECT `value` FROM `musmaker_payopt` WHERE `name` = 'SB' LIMIT 1");
	$rn = mysql_fetch_assoc($r);
	$value = 3000;
	mysql_query("UPDATE `musmaker_payopt` SET `value` = '".($value+1)."' WHERE `name` = 'SB' LIMIT 1");
	mysql_close();
	function formatOut($num) {
		if ($num < 10) return "0{$num}"; else return $num;
	}

$f=fopen("stat.dat","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
@$count++;
ftruncate($f,0);
fwrite($f,$count);
fflush($f);
flock($f,LOCK_UN);
fclose($f);


?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 12">
<meta name=Originator content="Microsoft Word 12">
<link rel=File-List href="../pay.files/filelist.xml">
<title>Извещение</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Van</o:Author>
  <o:LastAuthor>TaBoo</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>6</o:TotalTime>
  <o:LastPrinted>2009-07-16T09:51:00Z</o:LastPrinted>
  <o:Created>2009-11-15T08:33:00Z</o:Created>
  <o:LastSaved>2009-11-15T08:33:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>204</o:Words>
  <o:Characters>1166</o:Characters>
  <o:Company>Van</o:Company>
  <o:Lines>9</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1368</o:CharactersWithSpaces>
  <o:Version>12.00</o:Version>
 </o:DocumentProperties>
</xml><![endif]-->
<link rel=themeData href="../pay.files/themedata.thmx">
<link rel=colorSchemeMapping href="../pay.files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:DoNotHyphenateCaps/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>6 пт</w:DrawingGridHorizontalSpacing>
  <w:DrawingGridVerticalSpacing>6 пт</w:DrawingGridVerticalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>3</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:ValidateAgainstSchemas>false</w:ValidateAgainstSchemas>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotUnderlineInvalidXML/>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>RU</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:DoNotShadeFormData/>
  <w:StyleSortMethod>0</w:StyleSortMethod>
  <w:Compatibility>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
   <w:UseWord97LineBreakingRules/>
   <w:SelectEntireFieldWithStartOrEnd/>
   <w:UseWord2002TableStyleRules/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="--"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef m:val="off"/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:wrapRight/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="subSup"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" LatentStyleCount="267">
  <w:LsdException Locked="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="99" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Light List"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true"
   Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="65" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Revision"/>
  <w:LsdException Locked="false" Priority="72" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="73" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="60" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="61" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true"
   Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="60" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="65" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="66" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="67" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="68" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="69" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="70" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
 /* Page Definitions */
 @page
	{mso-page-border-surround-header:no;
	mso-page-border-surround-footer:no;}
@page Section1
	{size:595.45pt 841.7pt;
	margin:72.0pt 57.5pt 36.0pt 62.25pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
div.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
li.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
p.MsoNormal1 {mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
span.GramE1 {mso-style-name:"";
	mso-gram-e:yes;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Обычная таблица";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=RU style='tab-interval:36.0pt;text-justify-trim:punctuation'>
<div class=Section1>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<a href = "#" onClick="window.print();">Печать</a>
<p></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:9.1pt;border-collapse:collapse;mso-padding-alt:0cm 2.0pt 0cm 2.0pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.05pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:22.05pt'>
  <p class=MsoNormal style='background:white'><span lang=EN-US
  style='mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-top-alt:solid windowtext .75pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-right-alt:solid windowtext .75pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:22.05pt'>
  <p class=MsoNormal align=center style='text-align:center;background:white'><span
  style='font-size:11.0pt;color:black;letter-spacing:-.1pt'>Извещение</span></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:22.05pt'>
  <p class=MsoNormal align=right style='margin-left:.25pt;text-align:right;
  background:white'><span style='font-size:6.0pt;color:black;letter-spacing:
  -.05pt'>Форма №ПД-4</span></p>
  <p class=MsoNormal style='margin-left:.25pt;background:white'><i><span
  style='color:black;letter-spacing:.05pt'>ООО &quot;ПОЛИСВЕТ&quot;.
  ИНН/КПП </span></i><span style='color:black;letter-spacing:.05pt'>7710295351/771001001</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.65pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:21.65pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:21.65pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:21.65pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:1.45pt;
  margin-bottom:0cm;margin-left:2.4pt;margin-bottom:.0001pt;text-align:center;
  line-height:10.8pt;mso-line-height-rule:exactly;background:white'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;color:black;letter-spacing:
  .05pt'>получатель платежа<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:1.45pt;margin-bottom:
  0cm;margin-left:2.4pt;margin-bottom:.0001pt;line-height:10.8pt;mso-line-height-rule:
  exactly;background:white'><i><span style='color:black;letter-spacing:.1pt'>ОАО «Сбербанк России»<span style='mso-spacerun:yes'>                        
  </span>40702810238040102889
  <o:p></o:p></span></i></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:29.75pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:29.75pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:29.75pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:29.75pt'>
  <p class=MsoNormal style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.5pt;color:black'><span
  style='mso-spacerun:yes'>            </span>наименование банка<span
  style='mso-spacerun:yes'>                                                  
  </span>расчетный счет<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><span class=GramE><span style='font-size:8.5pt;
  color:black'>к</span></span><span style='font-size:8.5pt;color:black'>/<span
  class=GramE>счет</span> 30101810400000000225 в Сбербанк России ОАО,
      <o:p></o:p></span></p>
  <p class=MsoNormal style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><i><span style='font-size:8.5pt;color:black;
  letter-spacing:-.2pt'>г. Москва БИК 044525225
        <o:p></o:p></span></i></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:26.6pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:26.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:26.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:26.6pt'>
  <p class=MsoNormal style='margin-left:102.5pt;background:white'><span
  style='font-size:8.5pt;color:black;letter-spacing:-.2pt'>другие банковские
  реквизиты<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-left:102.5pt;background:white'><i
  style='mso-bidi-font-style:normal'><span style='font-size:12.0pt;color:black;
  letter-spacing:-.2pt'><?php echo $_POST['name']; ?></span></i> </p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:4;height:24.0pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal align=center style='margin-left:.7pt;text-align:center;
  background:white'><span style='font-size:8.5pt;color:black;letter-spacing:
  -.3pt'>Фамилия И. О. &quot;плательщика&quot;</span></p>
  <p class=MsoNormal style='margin-left:.7pt;background:white'><i><span
  style='font-size:10.5pt;color:black;letter-spacing:-.15pt'><?php echo $_POST['address']; ?></span></i></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:4;height:24.0pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:24.0pt'>
  <p class=MsoNormal align=center style='margin-left:.7pt;text-align:center;
  background:white'><span style='font-size:8.5pt;color:black;letter-spacing:
  -.3pt'>Адрес плательщика</span></p>
  <p class=MsoNormal style='margin-left:.7pt;background:white'><i><span
  style='font-size:10.5pt;color:black;letter-spacing:-.15pt'>Оплата информ. услуг по счету: СБ-
    <?=formatOut($value); echo $count;?></span></i> НДС не облагается.</p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:5;height:28.65pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:28.65pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:28.65pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:28.65pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:9.1pt;
  margin-bottom:0cm;margin-left:4.1pt;margin-bottom:.0001pt;text-align:center;
  line-height:11.3pt;mso-line-height-rule:exactly;background:white'><span
  style='font-size:8.5pt;color:black;letter-spacing:-.25pt'>Информационные услуги<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:9.1pt;margin-bottom:
  0cm;margin-left:4.1pt;margin-bottom:.0001pt;line-height:11.3pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.5pt;color:black;
  letter-spacing:-.25pt'><span style='mso-spacerun:yes'> </span></span><span
  style='font-size:8.5pt;color:black;letter-spacing:.05pt'>Сумма платежа<i
  style='mso-bidi-font-style:normal'>___<ins><?php echo $price;?></ins>___</i>руб. <i>00 КОП.<span
  style='mso-spacerun:yes; float: right;'><span
  style='mso-spacerun:yes'><?=date("d.m.Y");?>г.</span></i></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:31.95pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:31.95pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .75pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:31.95pt'>
  <p class=MsoNormal align=center style='text-align:center;background:white'><span
  style='font-size:11.0pt;color:black;letter-spacing:-.2pt'>Кассир</span></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:31.95pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:261.35pt;margin-bottom:
  0cm;margin-left:4.1pt;margin-bottom:.0001pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.5pt;color:black;
  letter-spacing:-.15pt'>Подпись </span><span style='font-size:8.5pt;
  color:black;letter-spacing:-.2pt'>плательщика</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:21.05pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:21.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:21.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:21.05pt'>
  <p class=MsoNormal align=right style='margin-left:1.2pt;text-align:right;
  background:white'><span style='font-size:6.0pt;color:black;letter-spacing:
  -.05pt'>Форма №ПД-4</span></p>
  <p class=MsoNormal style='margin-left:1.2pt;background:white'>ООО<span class="MsoNormal" style="margin-left:.25pt;background:white"><i><span
  style='color:black;letter-spacing:.05pt'> &quot;ПОЛИСВЕТ&quot;.
  ИНН/КПП </span></i><span style='color:black;letter-spacing:.05pt'>7710295351/771001001</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:23.1pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:23.1pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:23.1pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:23.1pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:.95pt;margin-bottom:
  0cm;margin-left:3.35pt;margin-bottom:.0001pt;line-height:10.8pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.0pt;color:black'><span
  style='mso-spacerun:yes'>                                                                 
  </span>получатель <span style='mso-spacerun:yes'> </span>платежа<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:.95pt;margin-bottom:
  0cm;margin-left:3.35pt;margin-bottom:.0001pt;line-height:10.8pt;mso-line-height-rule:
  exactly;background:white'><span style='color:black'><span
  style='mso-spacerun:yes'> </span><i><span style="color:black;letter-spacing:.1pt">ОАО «Сбербанк России»<span style='mso-spacerun:yes'>  </span></span><span style='letter-spacing:.1pt'><span style='mso-spacerun:yes'>                    
  </span></span><span style="color:black;letter-spacing:.1pt"><span style='mso-spacerun:yes'>  </span>40702810238040102889</span></i></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:28.8pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:28.8pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:28.8pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:28.8pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:28.55pt;margin-bottom:
  0cm;margin-left:.95pt;margin-bottom:.0001pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.5pt;color:black;
  letter-spacing:-.05pt'><span style='mso-spacerun:yes'>        
  </span>наименование банка<span
  style='mso-spacerun:yes'>                                                         
  </span>расчетный счет <o:p></o:p></span></p>
  <p class=MsoNormal1 style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><span class=GramE1><span style='font-size:8.5pt;
  color:black'>к</span></span><span style='font-size:8.5pt;color:black'>/<span
  class=GramE1>счет</span> 30101810400000000225 в Сбербанк России ОАО,
    <o:p></o:p>
  </span></p>
  <p class=MsoNormal1 style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'><i><span style='font-size:8.5pt;color:black;
  letter-spacing:-.2pt'>г. Москва БИК 044525225 </span></i></p>
  <p class=MsoNormal style='margin-right:22.1pt;line-height:9.1pt;mso-line-height-rule:
  exactly;background:white'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:26.4pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:26.4pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:26.4pt'>
  <p class=MsoNormal style='text-indent:13.5pt;background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:26.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:5.85pt;margin-bottom:
  0cm;margin-left:96.0pt;margin-bottom:.0001pt;background:white'><span
  style='font-size:8.0pt;color:black;letter-spacing:.05pt'>другие банковские
  реквизиты<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:5.85pt;margin-bottom:
  0cm;margin-left:96.0pt;margin-bottom:.0001pt;background:white'><i
  style='mso-bidi-font-style:normal'><span style='font-size:12.0pt;color:black;
  letter-spacing:-.2pt'><?php echo $_POST['name']; ?><o:p></o:p></span></i></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:5.85pt;margin-bottom:
  0cm;margin-left:96.0pt;margin-bottom:.0001pt;background:white'><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:11;height:13.6pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='margin-left:105.1pt;background:white'><span
  style='font-size:8.0pt;color:black;letter-spacing:-.15pt'>Фамилия И.
  О. плательщика </span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:12;height:14.05pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:14.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:14.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .75pt;mso-border-right-alt:solid windowtext .75pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:14.05pt'>
  <p class=MsoNormal style='margin-left:1.7pt;background:white'><i><span
  style='color:black'><?php echo $_POST['address']; ?></span></i></p>
  </td>
 </tr>
 
 <tr style='mso-yfti-irow:11;height:13.6pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .75pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:13.6pt'>
  <p class=MsoNormal style='margin-left:105.1pt;background:white'><span
  style='font-size:8.0pt;color:black;letter-spacing:-.15pt'>Адрес плательщика</span></p>
  </td>
 </tr>

 <tr style='mso-yfti-irow:12;height:14.05pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:14.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:14.05pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .75pt;mso-border-right-alt:solid windowtext .75pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:14.05pt'>
  <p class=MsoNormal style='margin-left:1.7pt;background:white'><i><span style="font-size:10.5pt;color:black;letter-spacing:-.15pt">Оплата информ. услуг по счету:</span><span
  style='color:black'> СБ-<?=formatOut($value);echo $count;?></span></i> НДС не облагается.</p>
  </td>
 </tr>
 
 
 <tr style='mso-yfti-irow:13;height:27.9pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:27.9pt'>
  <p class=MsoNormal style='background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:27.9pt'>
  <p class=MsoNormal align=center style='text-align:center;background:white'><span
  style='font-size:11.0pt;color:black;letter-spacing:-.1pt'>Квитанция</span></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:27.9pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:4.8pt;
  margin-bottom:0cm;margin-left:7.2pt;margin-bottom:.0001pt;text-align:center;
  line-height:11.05pt;mso-line-height-rule:exactly;background:white'><span
  style='font-size:8.5pt;color:black;letter-spacing:-.2pt'>Информационные услуги<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:4.8pt;margin-bottom:
  0cm;margin-left:7.2pt;margin-bottom:.0001pt;line-height:11.05pt;mso-line-height-rule:
  exactly;background:white'><span style='font-size:8.5pt;color:black;
  letter-spacing:-.2pt'><span style='mso-spacerun:yes'> </span></span><span
  style='font-size:8.5pt;color:black;letter-spacing:.05pt'>Сумма платежа<i>___<ins><?php echo $price;?></ins>___</i>руб. <i>00 КОП<span
  style='mso-spacerun:yes; float: right;'><span
  style='mso-spacerun:yes'><?=date("d.m.Y");?>г.</i></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;mso-yfti-lastrow:yes;height:35.25pt'>
  <td width=9 valign=top style='width:7.1pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:0cm 2.0pt 0cm 2.0pt;
  height:35.25pt'>
  <p class=MsoNormal align=center style='text-align:center;background:white'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=195 valign=top style='width:145.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:35.25pt'>
  <p class=MsoNormal align=center style='margin-right:42.0pt;text-align:center;
  line-height:23.5pt;mso-line-height-rule:exactly;background:white'><span
  style='font-size:11.0pt;color:black;letter-spacing:.05pt'><span
  style='mso-spacerun:yes'>             </span>Кассир</span></p>
  </td>
  <td width=414 valign=top style='width:310.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .5pt;
  background:white;padding:0cm 2.0pt 0cm 2.0pt;height:35.25pt'>
  <p class=MsoNormal style='margin-left:7.2pt;background:white'><span
  style='font-size:8.0pt;color:black;letter-spacing:.05pt'>Подпись</span></p>
  <p class=MsoNormal style='margin-left:7.2pt;background:white'><span
  style='font-size:8.5pt;color:black;letter-spacing:-.25pt'>плательщика </span></p>
  <p class=MsoNormal style='margin-left:7.2pt;background:white'><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>
<a href = "#" onClick="window.print();">Печать</a>
</div>

</body>

</html>

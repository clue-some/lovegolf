/**
 * Copyright (C) 2004, CodeHouse.com. All rights reserved.
 * CodeHouse(TM) is a registered trademark.
 *
 * THIS SOURCE CODE MAY BE USED FREELY PROVIDED THAT
 * IT IS NOT MODIFIED OR DISTRIBUTED, AND IT IS USED
 * ON A PUBLICLY ACCESSIBLE INTERNET website.
 *
 * Script Name: E-mail Hider
 *
 * You can obtain this script at http://www.codehouse.com
 */
 
function email(name, domain, suffix, text)
{
   var address = name + "\u0040" + domain + "." + suffix;
   var url = "mailto:" + address;

   if( ! text )
   {
      text = address;
   }

   document.write("<a href=\"" + url + "\">" + text + "</a>");
}
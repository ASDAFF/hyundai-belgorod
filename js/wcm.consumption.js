/*
 * File: wcm.consumption.js
 *
 * Copyright (c) 2007-2008 Oracle Corporation
 * 500 Oracle Parkway, Redwood Shores, California, 94065, U.S.A.
 * All rights reserved.
 *
 * This software is the confidential and proprietary information
 * of Oracle Corporation.
 */

var WCM = WCM || {}; // namespace object
WCM.consumptionContext = ""; // should be replaced by caller
WCM.contributionContext = ""; // should be replaced by caller
WCM.designContext = ""; // should be replaced by caller
WCM.sitePath = ""; //should be replaced by caller

//***************************************************************************

WCM.DHTML = WCM.DHTML || {}; // namespace object

//***************************************************************************

WCM.CONTRIBUTOR = WCM.CONTRIBUTOR || {}; // namespace object

//***************************************************************************
//***************************************************************************
//********************************** WCM ************************************
//***************************************************************************
//***************************************************************************

WCM.IsString = function(obj) { return (typeof obj == 'string'); }
WCM.IsUndefined = function(obj) { return (typeof obj == 'undefined'); }
WCM.IsNull = function(obj) { return (obj == null); }
WCM.IsValid = function(obj) { return (!WCM.IsNull(obj) && !WCM.IsUndefined(obj)); }

//***************************************************************************

WCM.GetUrlBase = WCM.GetUrlBase || function(context)
{
	return (context || window).location.href.split("?")[0].split("#")[0];
}

//***************************************************************************

WCM.GetBookmark = WCM.GetBookmark || function(context)
{
	context = context|| window;
	return (WCM.IsString(context.location.href.split("#")[1])) ? "#"+context.location.href.split("#")[1] : "";
}

//***************************************************************************

WCM.GetQueryString = WCM.GetQueryString || function(context)
{
	return (context || window).location.search;
}

//***************************************************************************

WCM.GetQueryStringValue = WCM.GetQueryStringValue || function(name, query)
{
	query = query || WCM.GetQueryString();

	if (query.indexOf(name) >= 0)
	{
		var q = query.replace(/.*\?/, '');

		if (WCM.IsValid(q) && q.length > 0)
		{
			var pairs = q.split("&");
			for (var i = 0; i < pairs.length; i++)
			{
				var p = pairs[i].split("=");
				if (name == p[0])
					return decodeURIComponent(p[1]);
			}
		}
	}
	return null;
}

//***************************************************************************

WCM.RemoveQueryStringValue = WCM.RemoveQueryStringValue || function(name, query)
{
	query = query || WCM.GetQueryString();

	if (query.indexOf(name) >= 0)
	{
		var q = query.replace(/\?/,'');

		if (WCM.IsValid(q) && q.length > 0)
		{
			var tmp = "";
			var pairs = q.split("&");
			for (var i = 0; i < pairs.length; i++)
			{
				var p = pairs[i].split("=");
				if (name != p[0])
					tmp += "&" + p[0] + "=" + p[1];
			}
			return tmp.replace(/\&/,'?');
		}
	}
	return query;
}

//***************************************************************************

WCM.ReloadURL = WCM.ReloadURL || function(url, context)
{
	context = context || window;

	if (WCM.IsValid(url))
	{
		if (context.location.href.toString() != url)
			context.location = url;
		else
			context.location.reload(true);
	}
}

//***************************************************************************
//***************************************************************************
//******************************* WCM.DHTML *********************************
//***************************************************************************
//***************************************************************************

WCM.DHTML.ID = WCM.DHTML.ID || function(id, context)
{
	if (WCM.IsValid(id) && WCM.IsString(id))
		return (context || document).getElementById(id);
	else
		return null;
}

//***************************************************************************

WCM.DHTML.ToObject = WCM.DHTML.ToObject || function(obj, def)
{
	return WCM.DHTML.ID(obj) || def || obj || null;
}

//***************************************************************************

WCM.DHTML.GetEventObject = WCM.DHTML.GetEventObject || function(e)
{
	return (e ? e : window.event);
}

//***************************************************************************

WCM.DHTML.GetEventCtrlKey = WCM.DHTML.GetEventCtrlKey || function(e)
{
	e = WCM.DHTML.GetEventObject(e);
	return e.ctrlKey;
}

//***************************************************************************

WCM.DHTML.GetEventShiftKey = WCM.DHTML.GetEventShiftKey || function(e)
{
	e = WCM.DHTML.GetEventObject(e);
	return e.shiftKey;
}

//***************************************************************************

WCM.DHTML.GetEventKeyCode = WCM.DHTML.GetEventKeyCode || function(e)
{
	e = WCM.DHTML.GetEventObject(e);
	return e.keyCode;
}

//***************************************************************************

WCM.DHTML.AddEvent = WCM.DHTML.AddEvent || function(elm, evType, fn, useCapture)
{
	elm = WCM.DHTML.ToObject(elm);
	if (WCM.IsValid(elm))
	{
		if (elm.addEventListener)
		{
			elm.addEventListener(evType, fn, useCapture);
			return true;
		}
		else if (elm.attachEvent)
		{
			var r = elm.attachEvent('on' + evType, fn);
			return r;
		}
		else
		{
			elm['on' + evType] = fn;
		}
	}
}

//***************************************************************************
//***************************************************************************
//**************************** WCM.CONTRIBUTOR ******************************
//***************************************************************************
//***************************************************************************

WCM.CONTRIBUTOR.OnKeyUp = WCM.CONTRIBUTOR.OnKeyUp || function(e)
{
	if ((WCM.DHTML.GetEventCtrlKey(e)) &&
	    (WCM.DHTML.GetEventShiftKey(e)) &&
	    (WCM.DHTML.GetEventKeyCode(e) == 116))
	{
		WCM.CONTRIBUTOR.Toggle();
	}
}

//***************************************************************************

WCM.CONTRIBUTOR.IsContributorMode = function()
{
	return (window.location.href.indexOf(WCM.contributionContext) != -1);
}

WCM.CONTRIBUTOR.IsDesignMode = function()
{
    return (window.location.href.indexOf(WCM.designContext) != -1);
}

//***************************************************************************

WCM.CONTRIBUTOR.Toggle = function(mode)
{
	var hash = WCM.GetBookmark();
	var query = WCM.GetQueryString();
    mode = mode || 'contributor';

    var url = "";
    if (mode == 'contributor') {
        if (!WCM.CONTRIBUTOR.IsContributorMode()) {
            url += WCM.contributionContext;
        } else {
            url += WCM.consumptionContext;
        }
    } else if (mode == 'design') {
        if (!WCM.CONTRIBUTOR.IsDesignMode()) {
            url += WCM.designContext;
        } else {
            //back to contribution mode
            url += WCM.contributionContext;
        }
    }
    url += WCM.sitePath;

    WCM.ReloadURL(url + query + hash);
}

//***************************************************************************

WCM.DHTML.AddEvent(document, 'keyup', WCM.CONTRIBUTOR.OnKeyUp);

//***************************************************************************

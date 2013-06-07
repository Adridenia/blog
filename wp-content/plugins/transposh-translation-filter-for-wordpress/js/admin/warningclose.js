/*
 * Transposh v0.9.3.1
 * http://transposh.org/
 *
 * Copyright 2013, Team Transposh
 * Licensed under the GPL Version 2 or higher.
 * http://transposh.org/license
 *
 * Date: Thu, 09 May 2013 03:20:09 +0300
 */
(function(a){a(function(){a(".warning-close").click(function(){a(this).parents("div:first").hide();a.post(ajaxurl,{action:"tp_close_warning",id:a(this).attr("id")})})})})(jQuery);

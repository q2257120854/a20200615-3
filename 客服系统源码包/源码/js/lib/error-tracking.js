// Simple code used to track JavaScript errors (should be added as the first script on every page)

;(function(ns)
{
	var errors = [];

	ns.onerror = function(errorMsg, url, lineNumber, column, errorObj)
	{
		errors.push(errorMsg + ', ' + url + ', line ' + lineNumber + ', column ' + column);
	};

	ns._getErrors = function()
	{
		return errors;
	};

})(window);
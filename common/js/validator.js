function checkForm(f) 
{
	var retVal = true;
	var fields = ['author', 'comment', 'captcha'];

	for (var i = 0; i < fields.length; i++) 
	{
		f[fields[i]].className = '';

		if (f[fields[i]].value == '')
		{
			f[fields[i]].className = 'error';
			retVal = false;
		}
	}

	return retVal;
}
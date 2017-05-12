Green Money Payments

*******************Installation****************

After installing magento 2, Follow these steps:

 - Upzip GreenMoney extention then copy app directory and paste in magento root directory
 
Now run these commands:

 - `php bin/magento setup:upgrade`
 - `php bin/magento setup:static-cotent:deploy`
 - `php bin/magento indexer:reindex`

********************* How to use ******************************
 - open admin panel
 - GO to system configuration
 - Now Open Payment method 
 - Save setting for grren money payments :
	i)  Set Enabled to YES
	ii)  Enter Client ID AND Api Password
	iii) Enter gateway url in Mode
		ex:https://cpsandbox.com/ecart.asmx
	iv) Enter Title for frented
	v) Set  New Order Status as Processing 
	vi) save settings

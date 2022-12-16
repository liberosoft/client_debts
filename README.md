## Simple PHP APP

Let's assume the following scenario
- The system is to update the customer's debt data
- data is provided by API based on customer number and customer code
- the first task is to retrieve the customer code based on the customer number
- then sequential retrieval of customer, address and debt data
- finally sending an email notification.

Let's assume for now that I need to perform all operations synchronously, without a queue.

I have added some questions in the service/GetClientDebts file

I would really appreciate seeing the code and any tips on how to design this better :)
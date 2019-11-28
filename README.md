<p>
    <p>The purpose of this assignment is to showcase knowledge of object-oriented programming.
 Make an effort to show as much knowledge of basic oop concepts as inheritance, abstraction,
 polymorphisms, encapsulation. Estimated time for application development is 5 hours. 
 The application should be written in php. The candidate should not use the UI or use the database.</p>

				    Task

<p>Create application TRADE CHAIN.TRADE CHAIN can have multiple stores.
The types of stores are: a traffic, a supermarket and a pharmacy.
Each store has products that have the following data: type, name, price and supplies(quantity in stock).
Product types are: food, drink, medicine, cigarettes, toys, parking tickets.
During selling the medicine and parking ticket, the serial number should be recorded.
Only traffickers can sell cigarettes. Only a pharmacy can sell medicines.
During selling, the store creates an bill that contains:
Number of bills - for each store it is generated separately and at the year level (every year it starts from 1).
date
customer data: name, surname, telephone number
a list of sold products  with quantities, prices and if the product is a medicine or parking ticket and a serial number.

After successful sale bill creation the supplies of sold products should be reduced. 
If the supplies of any product after reducing is less than 0,bill creation shouldn't be allowed.
Each store should have a record of products sold in the selected period.</p>

				    Test

<p>Make a test that should contain one store of each type, with a minimum of 2 products.
Create at least 2 bills for each store for today.
Make one bill with a quantity greater than the supplies of products in the store.
Make one bill at the pharmacy without entering the serial number.
Create a report of the sold products for each store for today.</p>

				    Bonus
<p>Every sale of each product should be logged in the format: 
type of store,  type of product, product price, before-sale supplies, after-sales supplies, time of sale.</p>
</p>

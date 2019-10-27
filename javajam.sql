create table coffee_price( 
    coffeeid int NOT NULL PRIMARY KEY,
    name char(50) NOT NULL,
    price_s float(4,2),
    price_d float(4,2)
);

create table order_table(
    id date NOT NULL PRIMARY KEY,
    qty1 int(3),
    qty2 int(3),
    qty3 int(3),
    qty4 int(3),
    qty5 int(3),
    earn1 float(4,2),
    earn2 float(4,2),
    earn3 float(4,2),
    earn4 float(4,2),
    earn5 float(4,2)
)
print("----------Welcome To Milktea Shop-----------")
print("------------------MENU---[S]---[M]---[L]----")
print("[W]---(Winter Melon)-----50PHP-60PHP-70-PHP-")
print("[T]---(Taro)-------------50PHP-60PHP-70-PHP-")
print("[M]---(Matcha)-----------50PHP-60PHP-70-PHP-")
print("----------------TOPPINGS--------------------")
print("[N]---(Nata)----------------10PHP-----------")
print("[P]---(Pearls)--------------15PHP-----------")
print("[C]---(Coffee Jelly)--------20PHP-----------")
import random

total_price = 0
nata = 10
pearl = 15
cofej = 20

def Choose_Drink():
    drinks = input("Enter Drink(W/T/M): ")
    if drinks in ["W", "w"]:
        drinks = "w"
    elif drinks in ["T", "t"]:
        drinks = "t"
    elif drinks in ["m", "M"]:
        drinks = "m"
    else:
        print("Not Available!")
        Choose_Drink()
    return drinks

def Choose_Size():
    size = input("Enter Size(S/M/L): ")
    if size in ["S", "s"]:
        size = "s"
    elif size in ["M", "m"]:
        size = "m"
    elif size in ["L", "l"]:
        size = "l"
    else:
        print("Not Available!")
        Choose_Size
    return size
while True:
    drinks = Choose_Drink()
    size = Choose_Size()
    if drinks == "w":
        if size == "s":
            total_price += 50
        elif size == "m":
            total_price += 60
        elif size == "l":
            total_price += 70
    elif drinks == "t":
        if size == "s":
            total_price += 50
        elif size == "m":
            total_price += 60
        elif size == "l":
            total_price += 70
    elif drinks == "m":
        if size == "s":
            total_price += 50
        elif size == "m":
            total_price += 60
        elif size == "l":
            total_price += 70
    customer = input("Additional Toppings? (y/n): ")
    if customer in ["Yes", "yes", "y", "Y"]:
        toppings = input("Select Toppings(N/P/C): ")
        if toppings in ["N", "n"]:
            print("Total Price:", + int(total_price) + int(nata), "PHP")
        elif toppings in ["P", "p"]:
            print("Total Price:", + int(total_price) + int(pearl), "PHP")
        elif toppings in ["C", "c"]:
            print("Total Price:", + int(total_price) + int(cofej), "PHP")
    elif customer in ["No", "no", "N", "n"]:
        print("Total Price: ", + int(total_price), "PHP")
    else:
        print("Total Price: ", + int(total_price), "PHP")
    quantity = input("Enter quantity of Milktea: ")
    if quantity.isdigit():
        finalprice = total_price * int(quantity)
        print("You have purchased", quantity, "Milktea/s")
        print("Total Price", finalprice)
    else:
        print("<Invalid Input")      
    choice = input("Order Again? (y/n): ")
    if choice in ["Yes", "yes", "y", "Y"]:
        pass
    elif choice in ["No", "no", "N", "n"]:
        print("Thanks for Ordering!")
        break
    else:
        print("Thanks for Ordering!")
        break



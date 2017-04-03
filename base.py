import math
E=int(input("Input the measure of the vertical angle (E): "))
A=int(input("Input the measure of the azimuth angle (A): "))
H=int(input("Input the height (Z): "))
Xl=int(input("Input the x coordinate of the antenna (Xl): "))
Yl=int(input("Input the y coordinate of the antenna (Yl): "))
Zl=0
B=61
Rr=(((Xl-((H/(math.tan(90-E)))*(math.sin(90-A))))**2)+((Yl-((H/(math.tan(90-E)))*(math.sin(A))))**2)+((Zl-(H-B))**2))**(1/2)
print("The Range is equal to:",Rr)

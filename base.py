import math
E=input("Input the measure of the vertical angle (E): ")
A=input("Input the measure of the azimuth angle (A): ")
H=input("Input the height (Z): ")
Xl=input("Input the x coordinate of the antenna (Xl): ")
Yl=input("Input the y coordinate of the antenna (Yl): ")
Zl=0
B=61
Rr=(((Xl-((H/(tan(90-E)))*(sin(90-A))))**2)+((Yl-((H/(tan(90-E)))*(sin(A))))**2)+((Zl-(H-B))**2))**(1/2)
print(Rr)

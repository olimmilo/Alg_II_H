import math
def rad2deg(radians):
	pi = math.pi
	degrees = 180 * radians / pi
	return degrees
def deg2rad(degrees):
	pi = math.pi
	radians = pi * degrees / 180
	return radians
E=float(input("Input the measure of the vertical angle (E): "))
A=float(input("Input the measure of the azimuth angle (A): "))
H=float(input("Input the height (Z): "))
Xl=float(input("Input the x coordinate of the antenna (Xl): "))
Yl=float(input("Input the y coordinate of the antenna (Yl): "))
Zl=0
B=61
Rr=(((Xl-((H/(math.tan(deg2rad(90-E))))*(math.sin(deg2rad(90-A)))))**2)+((Yl-((H/(math.tan(deg2rad(90-E))))*(math.sin(deg2rad(A)))))**2)+((Zl-(H-B))**2))**(1/2)
AZIM=2

print("The range is equal to:",Rr,"meters")
print("The azimuth is equal to:",AZIM,"\u00b0")

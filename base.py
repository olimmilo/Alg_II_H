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
ELEV=90-rad2deg(math.asin((H-61)/Rr))
Xp=((H/(math.tan(deg2rad(90-E))))*(math.sin(deg2rad(90-A))))
Yp=((H/(math.tan(deg2rad(90-E))))*(math.sin(deg2rad(A))))
if Xp and Yp > 0:
    QUAD=1
    AZIM=math.atan(rad2deg((Yl-Yp)/(Xl-Xp)))
elif Xp > 0 and Yp < 0:
    QUAD=4
    AZIM=(math.atan(rad2deg((Yl-Yp)/(Xl-Xp))))+360
elif Xp < 0 and Yp < 0:
    QUAD=3
    AZIM=(math.atan(rad2deg((Yl-Yp)/(Xl-Xp))))-180
elif Xp < 0 and Yp > 0:
    QUAD=2
    AZIM=(math.atan(rad2deg((Yl-Yp)/(Xl-Xp))))+180

print("The measure of the vertical angle of the beacon relative to the antenna:",ELEV,"\u00b0")
print("The azimuth of the beacon relative to the antenna:",AZIM,"\u00b0")
print("The range of the beacon relative to the antenna:",Rr,"meters")
def pos_neg(a,b,negative)
	return (a<0 && b>0 && negative==false) || (a>0 && b<0 && negative==false) || (a<0 && b<0 && negative)
end
puts pos_neg(1,-1,false) ? "pass" : "fail"
puts pos_neg(-2,3,false) ? "pass" : "fail"
puts pos_neg(-4,-5,true) ? "pass" : "fail"
puts pos_neg(1,1,false) ? "fail" : "pass"
puts pos_neg(3,-9,true) ? "fail" : "pass"


def pos_neg(a,b,negative)
	if (a<0 && b>0 && negative==false) || (a>0 && b<0 && negative==false)
		return true
		elsif a<0 && b<0 && negative==true
		return true
	else
		return false						
	end	
end
puts pos_neg(1,-1,false) ? "True" : "False"
puts pos_neg(-2,3,false) ? "True" : "False"
puts pos_neg(-4,-5,true) ? "True" : "False"
puts pos_neg(1,1,false) ? "True" : "False"
puts pos_neg(3,-9,true) ? "True" : "False"


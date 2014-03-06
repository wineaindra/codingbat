def makes10(a,b)
	if a==10 || b==10 || a+b==10
		return true
	else
		return false	
	end	
end
puts makes10(9,10) ? "True" : "False"
puts makes10(9,9) ? "True" : "False"
puts makes10(9,1) ? "True" : "False"
puts makes10(1,2) ? "True" : "False"
puts makes10(5,5) ? "True" : "False"
puts makes10(10,10) ? "True" : "False"
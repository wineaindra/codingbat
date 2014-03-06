def diff21(n)
	return (n-21).abs * (n>21 ? 2 : 1)
end
puts diff21(19)==2 ? "pass" : "fail"
puts diff21(10)==11 ? "pass" : "fail"
puts diff21(21)==0 ? "pass" : "fail"
puts diff21(25)==8 ? "pass" : "fail"
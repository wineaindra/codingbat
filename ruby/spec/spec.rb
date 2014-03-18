require_relative "../monkey_trouble"
require_relative "../sleep_in"
require_relative "../diff21"
require_relative "../sum_double"
require_relative "../string_times"
require_relative "../array123"
require_relative "../array_front9"
require_relative "../array_count9"
require_relative "../string_spolosion"
require_relative "../last2"

describe "sleep_in" do
	it "should return true if we are on vacation" do
		sleep_in(false, true).should be_true
		sleep_in(true, true).should be_true
	end
	it "should return true if it is weekend" do
		sleep_in(false, false).should be_true
		sleep_in(false, true).should be_true
	end
	it "should return false either if we are not on vacation or if it's weekday" do
		sleep_in(true, false).should be_false
	end
end 

describe "monkey_trouble" do 
	it "should return true if you are in trouble." do
		monkey_trouble(false,false).should be_true
		monkey_trouble(true,true).should be_true
	end
	it "should return false if you are not in trouble" do
		monkey_trouble(true,false).should_not be_true
	end
end

describe "diff21" do
	it "should return diff between given num and 21 if num is less than 21" do
		diff21(10).should eq(11)
		diff21(20).should eq(1)
	end
	it "should return double of diff between given num and 21 if num is gtr than 21" do
		diff21(25).should eq(8)
		diff21(30).should eq(18)
	end
	it "should do nothing but compare" do
		"bla".should eq "bla"
		"".should be_empty
		[].should be_empty
		#[1,2,3].should contains 2
	end
end

describe "sum_double" do
	it "should return sum of given numbers if they are different" do
		sum_double(1,2).should eq(3)
		sum_double(3,2).should eq(5)
	end
	it "should return double of their sum if they are same" do
		sum_double(2,2).should eq(8)
		sum_double(3,3).should eq(12)
	end
end

describe "string_times" do
	it "should return a larger string that is n copies of the original string" do
		string_times("Hi",3).should eq("HiHiHi")
	end
end

describe "array123" do
	it "should return true if 1,2,3 appears in the array somewhere" do
		array123([1, 1, 2, 3, 1]).should be_true
	end
	it "should return false if 1,2,3 is not appear in the array somewhere" do
		array123([1, 1, 2, 4, 1]).should be_false
	end
end

describe "array_front9" do
	it "should return True if one of the first 4 elements in the array is a 9" do
		array_front9([1, 2, 9, 3, 4]).should be_true
	end
	it "should return False if one of the first 4 elements in the array is not 9" do
		array_front9([1, 2, 3, 4, 9]).should be_false
	end
end

describe "array_count9" do
	it "should return the number of 9's in the array" do
		array_count9([1, 2, 9]).should eq(1)
		array_count9([1, 9, 9, 3, 9]).should eq(3)
	end
end

describe "string_spolosion" do
	it "should return a string like CCoCodCode if argument is Code" do
		string_spolosion("Code").should eq("CCoCodCode")
		string_spolosion("abc").should eq("aababc")
		string_spolosion("ab").should eq("aab")
	end
end

describe "last2" do
	it "should return the the count of the number of times that a substring length 2 appears in the string and also as the last 2 chars of the string" do
		last2("hixxhi").should eq(1)
		last2("axxxaaxx").should eq(2)
		last2("aabbaabbaabbaa").should eq(3)
	end
end




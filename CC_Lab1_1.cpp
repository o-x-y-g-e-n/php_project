								//CC - Lab 1
						//hello! i am designing a Dfa.... i dont know why
#include <iostream>
#include <algorithm>
#include <cmath>
#include <string>
#include <cstring>
#include <cstdio>
#include <cstdlib>
#include <vector>
using namespace std;
int main()
{
	vector<string>l_inp = { "q0","q1","q2"};
	vector<vector<string> >r_inp;
	vector<string>temp1 = {"q1","q0"};
	r_inp.push_back(temp1);
	temp1 = {"q1","q2"};
	r_inp.push_back(temp1);
	temp1 = {"q1","q0"};
	r_inp.push_back(temp1);
	cout << r_inp.size() << endl;
	string mystr;
	cout << "enter your string to check if its valid or not\n" << endl;
	cin >> mystr;
	// i define your current state
	string ptr = l_inp[0];
	int flag =0;
	// dude !! just accept it....
	string accepting_state = "q2";
	//here goes my logic!
	if(mystr.size() <=0)
		cout << "please enter a valid string" << endl;
	for(int i=0 ; i<mystr.size() ; i++)
	{
		if(mystr[i] != 'a' && mystr[i] != 'b'){
			//cout << "not a valid string--dude" << endl;
			flag = 1;
			break;
		}
		if(mystr[i] == 'a')
		{
			if(ptr == "q0") ptr = "q1";
			else if(ptr == "q1") ptr = "q1";
			else if(ptr == "q2") ptr = "q1";
		}
		else if(mystr[i] == 'b')
		{
			if(ptr == "q0") ptr = "q0";
			else if(ptr == "q1") ptr = "q2";
			else if(ptr == "q2") ptr = "q0";
		}
		
	}
	if(ptr == "q2" && flag == 0)
			cout << "Valid String" << endl;
		else
			cout << "not a valid string" << endl;
	return 0;	
}


# -*- coding: utf-8 -*-
"""
Created on Tue Oct 12 11:53:12 2021

@author: ialzu
"""


import sys 
import pandas
from sklearn import model_selection
from sklearn.linear_model import LogisticRegression
import pickle
import argparse
parser = argparse.ArgumentParser()
parser.add_argument("AD_Month", type=int, help="Melady ")
parser.add_argument("Lag1", "--verbosity", type=int, help="Lag 1")
parser.add_argument("Lag2", "--verbosity", type=int, help="Lag 2")
parser.add_argument("Lag3", "--verbosity", type=int, help="Lag 3")
parser.add_argument("Lag4", "--verbosity", type=int, help="Lag 4")
parser.add_argument("Lag5", "--verbosity", type=int, help="Lag 5")
parser.add_argument("Lag6", "--verbosity", type=int, help="Lag 6")
parser.add_argument("Lag7", "--verbosity", type=int, help="Lag 7")
parser.add_argument("Long_Vacation", "--verbosity", type=int, help="Long Vacation")
parser.add_argument("temp_min", "--verbosity", type=int, help="Minimum Temperature")




args = parser.parse_args()

filename = 'finalized_model.sav'
#pickle.dump(model, open(filename, 'wb'))
 
# some time later...
 
# load the model from disk
loaded_model = pickle.load(open(filename, 'rb'))
result = loaded_model.score()



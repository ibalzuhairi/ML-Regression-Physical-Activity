# -*- coding: utf-8 -*-
"""
Created on Tue Oct 12 11:53:12 2021
@author: ialzu
"""


import sys 
import pandas as pd
from sklearn import model_selection
from sklearn.linear_model import LogisticRegression
import pickle
import argparse


import warnings
warnings.filterwarnings("ignore")


parser = argparse.ArgumentParser()
parser.add_argument("AD_Month", type=int, help="Melady ")
parser.add_argument("Lag1", type=int, help="Lag 1")
parser.add_argument("Lag2",  type=int, help="Lag 2")
parser.add_argument("Lag3", type=int, help="Lag 3")
parser.add_argument("Lag4", type=int, help="Lag 4")
parser.add_argument("Lag5", type=int, help="Lag 5")
parser.add_argument("Lag6",  type=int, help="Lag 6")
parser.add_argument("Lag7",  type=int, help="Lag 7")
parser.add_argument("Long_Vacation", type=int, help="Long Vacation")
parser.add_argument("temp_min", type=int, help="Minimum Temperature")




args = sys.argv

filename = 'finalized_model2.sav'
#pickle.dump(model, open(filename, 'wb'))
 
# some time later...
 
# load the model from disk
loaded_model = pickle.load(open(filename, 'rb'))
result = loaded_model.predict(pd.DataFrame(data=[[args[1],args[2],args[3],args[4],args[5],args[6],args[7],args[8],args[9],args[10],args[11],args[12],args[13],args[14],args[15]]]))
print(result[0])
<?php $this->xcontroller = new controller();?>
<style>
    .visitors .column{
        margin : 0; padding :0;
    }

    select{
        height : 30px;
        padding : 0 5px;
        margin : 0 5px;
        border-radius : 15px;
        outline : none;
    }

</style>
<div class="wrapper">
    <div class="row">
        <div class="column column-12">
            <h1>Customer Queries</h1>
            <?php 
                $data = $this->xcontroller->generateQuery('in_queries');
                echo'<table class="price-table">
                        <p>Queries</p><br/>
                        <tr>
                            <th>Name</th>
                            <th>Visiter</th>
                            <th>Place</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>';
                foreach($data as $key=>$val){
                    echo '<tr>
                            <td>'.$val['in_query_name'].'</td>
                            <td>'.$val['in_query_visiter'].'</td>
                            <td>'.$val['in_query_place'].'</td>
                            <td>'.$val['in_query_mobile'].'</td>
                            <td>'.$val['in_query_email'].'</td>
                            <td>'.$val['in_query_message'].'</td>
                        </tr>';                        
                }
                echo '</table>';

                
            ?>
        </div>

                
    </div>

    <div class="row">
        <div class="column column-12">
            <h1>Payments and Complaints</h1>
            <div class="wrapper">
            <?php 
                    $data = $this->xcontroller->generateQuery('in_payments');
                    echo'<table class="price-table">
                            <p>Queries</p><br/>
                            <tr>
                                <th>Name</th>
                                <th>Holder</th>
                                <th>Account</th>
                                <th>Amount</th>
                                <th>Txn ID</th>
                                <th>Mobile</th>
                                <th>Message</th>
                            </tr>';
                foreach($data as $key=>$val){
                        echo '<tr>
                                <td>'.$val['in_pay_name'].'</td>
                                <td>'.$val['in_pay_holder'].'</td>
                                <td>'.$val['in_pay_account'].'</td>
                                <td>'.$val['in_pay_amount'].'</td>
                                <td>'.$val['in_pay_txn'].'</td>
                                <td>'.$val['in_pay_mobile'].'</td>
                                <td>'.$val['in_pay_message'].'</td>
                            </tr>';                        
                    }
                    echo '</table>';

                    
            ?>
        </div>

    </div>

    <div class="row">
        <div class="column column-12">
            <div class="form-card">
                <p>Day Visit Booking</p>
                    <form action="<?php echo HOME?>dashboard/DVbooking" method="POST">
                    <p style="margin-bottom : 0;">User Details</p>

                    <div class="row">
                            <div class="column column-12">
                                
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Country</span>
                                        <select>
                                            <option value="+91">India (+91)</option>
                                        </select>
                                    </div>
                                </div>
                                
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Mobile Number</span>
                                            <input type="number" name="loginID" class="input-full" placeholder="Enter Your Mobile Number Without Code">
                                    </div>
                                </div>


                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Date Of Birth</span>
                                            <input type="text" name="dob" class="input-full" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                
                                

                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Password</span>
                                            <input type="password" name="loginPassword" class="input-full" placeholder="Enter Login Password">
                                    </div>
                                </div>
                            </div>
                    </div>
   
                        <div class="row">
                            <div class="column column-12">    
                                <div class="row">
                                    <div class="column column-2">
                                    <div class="form-group">
                                        <span>Choose Zone</span>
                                        <select>
                                            <option value="+91">Bijrani</option>
                                            <option value="+91">Dhikala</option>
                                            <option value="+91">Durgadevi</option>
                                            <option value="+91">Jhirna</option>
                                            <option value="+91">Dhela</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="column column-2">
                                    <div class="form-group">
                                        <span>Choose Shift</span>
                                        <select>
                                            <option value="+91">Morning</option>
                                            <option value="+91">Evening</option>
                                        </select>        
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Date Of Journey</span>
                                            <input type="text" name="DVdate" class="input-full" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                
                                

                                <div class="row">
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Adults</span>
                                            <input type="number" name="adults" class="input-full" placeholder="Number of Adults">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="column column-2">
                                    <div class="form-group">
                                        <span>Childrens</span>
                                            <input type="number" name="childs" class="input-full" placeholder="Number of Childrens">
                                    </div>
                                </div>

                                
                            </div>
                                
                        </div>

                        <p  style="margin-bottom : 0;">Adults Details</p>    
                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="adult1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                            <select>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                            <select>
                                                <option value="+91">India</option>
                                                <option value="+91">China</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                            <select>
                                                <option value="+91">PAN Card</option>
                                                <option value="+91">Driving License</option>
                                                <option value="+91">Passport</option>
                                                <option value="+91">Other Employee ID</option>
                                                <option value="+91">School ID</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="ID Number">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        

                        <p style="margin-bottom : 0;">Childrens Details</p>    
                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Name</span>
                                                <input type="text" name="name1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Gender</span>
                                                <input type="text" name="gender1" class="input-full" placeholder="Gender">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                            <span>Age</span>
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Country</span>
                                                <input type="text" name="country1" class="input-full" placeholder="Country">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Type</span>
                                                <input type="text" name="id1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>ID Number</span>
                                                <input type="text" name="num1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                            <span>Mobile</span>
                                                <input type="number" name="mobile1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row visitors">
                            <div class="column column-12">
                                <div class="row">
                                    <div class="column column-2">
                                        <div class="form-group">
                                                <input type="text" name="name1" class="input-full" placeholder="First Visitor">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                                <input type="text" name="gender1" class="input-full" placeholder="Gender">
                                        </div>
                                    </div>

                                    <div class="column column-1">
                                        <div class="form-group">
                                                <input type="number" name="age1" class="input-full" placeholder="Age">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                                <input type="text" name="country1" class="input-full" placeholder="Country">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                                <input type="text" name="id1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                                <input type="text" name="num1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>

                                    <div class="column column-2">
                                        <div class="form-group">
                                                <input type="number" name="mobile1" class="input-full" placeholder="Booking Zone">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <p  style="margin-bottom : 0;">Debit Card Details</p>
                        <div class="row">
                            <div class="column column-12">
                                
                                <div class="row">
                                    <div class="column column-4">
                                    <div class="form-group">
                                        <span>Card Number</span>
                                            <input type="text" name="card" class="input-full" placeholder="Booking Zone">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>Expiry</span>
                                            <input type="date" name="expiry" class="input-full" placeholder="Morning/Evening">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="column column-3">
                                    <div class="form-group">
                                        <span>CVV</span>
                                            <input type="number" name="cvv" class="input-full" placeholder="Enter the Place You want to Visit">
                                    </div>
                                </div>
                                
                                

                                <div class="row">
                                    <div class="column column-2">
                                    <div class="form-group">
                                        <span>Password</span>
                                            <input type="password" name="pass" class="input-full" placeholder="Enter the Place You want to Visit">
                                    </div>
                                </div>

                                

                                
                            </div>
                                
                        </div> 
                        <input type="submit" name="Subscribe" class="trip-button" value="Book Now">
                    </form>
            </div>
        </div>
    </div>
</div>

    
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All customer details</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>firstName</th>
                        <th>lastName</th>
                        <th>email</th>
                        <th>phone</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $customer->fname ?></td>
                        <td><?= $customer->lname ?></td>
                        <td><?= $customer->email ?></td>
                        <td><?= $customer->phone ?></td>
                      
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
                        
                    
    


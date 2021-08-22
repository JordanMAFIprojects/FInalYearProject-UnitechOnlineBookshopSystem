<?php include('include/admin/header.php'); ?>
<section>
		<div class="container">
			<div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
                        
                        <?php $item = $jim->getorder(); ?>
                        <?php while($row = mysql_fetch_array($item)): ?>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">ORDER INFORMATION</h3>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td class="text-right"><strong>Student Name :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['name'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Student ID :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['contact'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Course Code :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['address'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Email :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['email'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Date Ordered :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['dateOrdered'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total Amount :</strong></td>
                                        <td class="text-danger"><strong>K <?php echo $row['amount'];?>.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Item(s) :</strong></td>
                                        <td class="text-primary"><strong><?php echo $row['item'];?></strong></td>
                                    </tr>
                                    <tr>
									
                                    <?php if($p == 'unconfirmed'){ ?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=deliver&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Stock Items</a></td>
                                    <?php }else if($p == 'delivered'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=paid&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Deliver</a></td>
                                    <?php } ?>
                                        <button><b>Print Invoice</b></button><br><br>
										<strong><ul>Signature</ul></strong>
										<br>
										OIC...................................
										<br><br>  
										Student.............................                      
                                    </tr>
                                </table>
                            </div>
                            </div>
                        
                        <?php endwhile; ?>
              </section>



<?php include('include/admin/footer.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/templateadmin/assets/slickslider/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/templateadmin/assets/slickslider/slick/slick-theme.css"/>
<script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/templateadmin/assets/slickslider/slick/slick.min.js"></script>


<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<style type="text/css">
  .slick-prev:before {
  color: green;
}
.slick-next:before {
  color: green;
}
</style>

        <div class="page-header">
          <div class="row">
            <div class="col-md-4">
              <div class="media">
                <div class="media-body">
                  <div class="display-6">Product Management</div>
                  <!-- <p class="small text-muted">
                     Info Table Design</p> -->
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="pull-xs-right" role="toolbar">
                <!-- <a class="btn btn-icon icon-only"><i class="fa fa-rss"></i></a><a class="btn btn-icon icon-only"><i class="fa fa-star text-warning"></i></a> -->
               <!--  <button class="btn btn-secondary" type="button" data-toggle="collapse" href="#qmenu" aria-expanded="false" aria-controls="qmenu">Open menu</button> -->
                <button class="btn btn-success" 
                
                onclick="clearall();">Add product</button>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="container-fluid">
          <!-- from product other start -->
              <div class="panel-wrapper" style="display: none;" id="addeditform">
            <div class="panel">
              <div class="panel-heading">
                  <h4 class="panel-title"><div id="formheading"></div></h4>
                </div>
                <div class="panel-body">
                  <form method="POST"  action="" id="idFormproduct" enctype="multipart/form-data" accept-charset="utf-8">
                  <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Name</h4>
                      <input class="form-control" type="text" required="required"  name="namenm" id="nameid">
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Image<span style="font-size:10px">(width:500px ,height:748px)</span></h4>
                      <!-- <input class="form-control" type="file" placeholder="emailid" required="required" name="image_file" id="productimage"> -->
                      <input class="form-control" type="file"  name="image_file[]" id="productimage"  multiple="multiple" />
                      <input type="hidden" name="imagehid" id="imagehid">
                      <div id="imagefill"></div>
                      
                    </div>
                    <input type="hidden" name="productnm" id="productid">
                  </div>

                  <div class="row m-b-2">


                    <div class="form-group col-sm-6" id="categorylistdiv1">
                      <h4 class="demo-sub-title">Category</h4>
                      <select class="form-control c-select" name="category" id="category" onchange="getsubcats();" data-plugin="selectpicker" required="required">
                        <option value="">Select</option>
                        <?php foreach($catother as $catdpdwn){?>
                          <option value="<?php echo $catdpdwn->category_id;?>" ><?php echo $catdpdwn->category_label;?></option>
                        <?php }?>
                        
                       
                      </select>
                   </div>

                 


                       <div class="form-group col-sm-6" id="subcategorydiv1">
                      <h4 class="demo-sub-title">SubCategory</h4>
                      <select class="form-control c-select" name="subcategory" required="required"  id="subcategory" >
                        <option value="">select</option>
                       
                      </select>
                      </div>

                     <div class="form-group col-sm-6" id="subcategorydiv2">
                    <h4 class="demo-sub-title">Division</h4>
                      <select class="form-control c-select" name="division" id="division" >
                        <option value="">select</option>
                        
                      </select>
                     </div>

               </div>

              <div class="row m-b-2">
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Brand</h4>
                      <select class="form-control" id="brandid" name="brandnm">
                        <option value="">Select</option>
                        <?php foreach($brandtype as $row) { ?>
                        <option value="<?php echo $row->brand_name ?>"><?php echo $row->brand_name ?></option> 
                        <?php } ?> 
                      </select>
                    </div>
                
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">MRP Price</h4>
                      <input class="form-control  " type="text" required="required" name="mrpnm" pattern="[0-9.]+" title="only numbers allowed" id="productrate">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Purchase Rate </h4>
                      <input class="form-control " type="text" required="required" name="purchaserate_nm" id="purchaserate_id" pattern="[0-9.]+" title="only numbers allowed" >
                    </div>
                    
                    
                 
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Discount(%)</h4>
                      <input class="form-control " type="text" name="discountpercent_nm" id="productdiscount" pattern="[0-9]+" title="only numbers allowed">
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Selling Price</h4>
                      <input class="form-control  " type="text" name="sellprice_nm"   pattern="[0-9.]+" id="sellprice" required="required">
                    </div>
                    
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Iconic ?</h4>
                      <select class="form-control" id="producticonic" name="producticonic">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                      </select>
                    </div>
                    
                    
                </div>
         

                


              <div class="row m-b-2" id="colorsheo">
                  <div id="appendnext">
                  <div id=block0>  
                  
                  <div class="form-group col-sm-4">
                     <!--  <h4 class="demo-sub-title">Shoe Size</h4> -->
                      <label class="demo-sub-title">Shoe Size</label>
                      <select class="form-control " name="shoesize_nm[]" id="shoesize_id0">
                        <option value="">Select</option>
                        <option value="18">18</option>
                        <option value="20">20</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                        <option value="36">36</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                        <option value="44">44</option>
                        <option value="46">46</option>                        
                      </select>
                      
                  </div>


                  <div class="form-group col-sm-4">
                      <label class="demo-sub-title">Color choice</label> 
                    <select class="form-control" onchange="coloroptioncheck(0);" name="colorstat[]" id="colorstat0" >                    
                      <option value="Colors">Colors</option>
                      <option value="Image">Image</option>
                    </select>
                  </div>

                  <div class="form-group col-sm-4" id="colordropdwn0">
                   <label class="demo-sub-title">Color</label> 

                    <select class="form-control" name="colors[]" id="colors0" >
                     
                      <option value="">Select</option>
                      <option value="white">White</option>
                      <option value="black">Black</option>
                      <option value="blue">Blue</option>
                      <option value="green">Green</option>
                      <option value="red">Red</option>
                      <option value="yellow">Yellow</option>
                      <option value="orange">Orange</option>
                      <option value="pink">Pink</option>
                      <option value="gray">Gray</option>
                      <option value="brown">Brown</option>
                    </select>

                  </div>

                    <div class="form-group col-sm-4 imgcolors" id="imgclor0">
                      <label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label>
                      <input class="form-control" type="file"  name="image_file10" id="colorimage0" />
                      <input type="hidden" name="imagehid1[]" id="imagehid0">
                      <div id="imagefill0"></div>
                      
                    </div>

                    <div class="form-group col-sm-2">
                      <!-- <h4 class="demo-sub-title">Stock Quantity</h4> -->
                      <label class="demo-sub-title">Stock Quantity</label>
                     <input type="text" class="form-control " name="quantitynm[]" id="quantityid0"  pattern="[0-9.]+" placeholder="Only numbers allowed" value="1">
                    </div>


                    <div class="form-group col-sm-3">
                     
                      <label class="demo-sub-title">MRP</label>
                     <input type="text" class="form-control " name="mrpwise[]" id="mrpwise0" oninput="fillsellprice(0);" pattern="[0-9.]+" value="">
                    </div>
                    <div class="form-group col-sm-3">                     
                      <label class="demo-sub-title">Selling Price</label>
                     <input type="text" class="form-control " name="sellpricewise[]" id="sellpricewise0" onchange="calcitspers(0)" pattern="[0-9.]+" value="0">
                    </div>
                    <div class="form-group col-sm-3">
                     
                      <label class="demo-sub-title">Discount(%)</label>
                     <input type="text" class="form-control " name="discountwise[]" id="discountwise0" onchange="calcdisc(0)" pattern="[0-9.]+" placeholder="Only numbers allowed" value="0">
                    </div>

                  
                  <div class="form-group col-sm-1" style="padding-top: 2.8%;">
                    <button class="btn btn-success" type="button" onclick="nextadd();" id="add" style="padding: 1px 11px;border-radius: 8px;font-size: 23px">+</button>
                  </div>
                  </div>
                 </div>

                 <div id="appendnext1"></div>

                 <input type="hidden" name="count_add_t" id="count_add_t" value="0">
                  <input type="hidden" name="count_remove_t" id="count_remove_t" value="0">
                </div>

           

                <div class="row m-b-2" id="colorothr">
                  <div id="appendnextp">
                  <div id=blockp0>  


                     
                      <div class="form-group col-sm-2">
                     <!--  <h4 class="demo-sub-title">Shoe Size</h4> -->
                      <label class="demo-sub-title">Size no</label>
                      <select class="form-control " required="required" name="shoesize_nmp[]" id="shoesize_idp0">
                        <option value="">Select</option>
                        <option value="18">18</option>
                        <option value="20">20</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                        <option value="36">36</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                        <option value="44">44</option>
                        <option value="46">46</option>                        
                      </select>
                      
                     </div>


                     <div class="form-group col-sm-2">
          
                      <label class="demo-sub-title">Size Letter</label>
                      <select class="form-control " required="required" name="psizeltr_nmp[]" id="sizeltr_id0">
                        
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        
                        
                                                
                      </select>
                      
                     </div>


                  <div class="form-group col-sm-4">
                      <label class="demo-sub-title">Color choice</label> 
                    <select class="form-control" onchange="coloroptioncheckp(0);" name="colorstatp[]" id="colorstatp0" >                    
                      <option value="Colors">Colors</option>
                      <option value="Image">Image</option>
                    </select>
                  </div>

                  <div class="form-group col-sm-4" id="colordropdwnp0">
                   <label class="demo-sub-title">Color</label> 

                    <select required="required" class="form-control" name="colorsp[]" id="colorsp0" >
                     
                       <option value="">Select color</option>
                      <option value="white">White</option>
                      <option value="black">Black</option>
                      <option value="blue">Blue</option>
                      <option value="green">Green</option>
                      <option value="red">Red</option>
                      <option value="yellow">Yellow</option>
                      <option value="orange">Orange</option>
                      <option value="pink">Pink</option>
                      <option value="gray">Gray</option>
                      <option value="brown">Brown</option>
                    </select>

                  </div>

                    <div class="form-group col-sm-4 imgcolors" id="imgclorp0">
                      <label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label>
                      <input class="form-control" type="file"  name="image_filep10" id="colorimagep0" />
                      <input type="hidden" name="imagehid1p[]" id="imagehidp0">
                      <div id="imagefill0"></div>
                      
                    </div>

                    <div class="form-group col-sm-2">
                      <!-- <h4 class="demo-sub-title">Stock Quantity</h4> -->
                      <label class="demo-sub-title">Stock Quantity</label>
                     <input type="text" class="form-control " name="quantitynmp[]" id="quantityidp0" required="required" pattern="[0-9.]+" placeholder="Only numbers allowed" value="1">
                    </div>


                    <div class="form-group col-sm-3">
                     
                      <label class="demo-sub-title">MRP</label>
                     <input type="text" class="form-control " name="mrpwisep[]" required="required" id="mrpwisep0" oninput="fillsellprice1(0);" pattern="[0-9.]+" value="">
                    </div>
                    <div class="form-group col-sm-3">                     
                      <label class="demo-sub-title">Selling Price</label>
                     <input type="text" class="form-control " name="sellpricewisep[]" id="sellpricewisep0" onchange="calcitspers1(0)" required="required" pattern="[0-9.]+" value="">
                    </div>
                    <div class="form-group col-sm-3">
                     
                      <label class="demo-sub-title">Discount(%)</label>
                     <input type="text" class="form-control " name="discountwisep[]" id="discountwisep0" onchange="calcdisc1(0)" pattern="[0-9.]+" placeholder="Only numbers allowed"  value="0">
                    </div>

                  
                  <div class="form-group col-sm-1" style="padding-top: 2.8%;">
                    <button class="btn btn-success" type="button" onclick="nextadd1();" id="add" style="padding: 1px 11px;border-radius: 8px;font-size: 23px">+</button>
                  </div>

                  
                   
                  </div>
                 </div>
                 
                 <div id="appendnextp1"></div>

                 <input type="hidden" name="count_add_p" id="count_add_p" value="0">
                  <input type="hidden" name="count_remove_p" id="count_remove_p" value="0">
                </div>


             
                 <div class="row m-b-2">
                  
                   <div class="form-group col-sm-4" style="display: none;">
                      <h4 class="demo-sub-title">Product Discount Price </h4>
                      <input class="form-control  " type="text"  name="productdiscountprice" id="productdiscountprice" readonly="readonly" required="required">
                    </div>
                     <div class="form-group col-sm-6" style="display: none;">
                      <h4 class="demo-sub-title">Product Commission(%)</h4>
                      <input class="form-control " type="text"  name="productcomm" id="productcomm" pattern="[0-9]+" title="only numbers allowed" value = "10">
                    </div>
                      <div class="form-group col-sm-4" style="display: none;">
                      <h4 class="demo-sub-title">Strike Price</h4>
                      <input class="form-control  " type="text"  name="prodaddedcomm"  readonly="readonly" id="prodaddedcomm" required="required">
                    </div>
                  </div> 

                 <div class="row m-b-2">   
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Description</h4>
                      <textarea class="form-control" name="descnm" id="descid"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Product Composition</h4>
                      <textarea class="form-control" name="compositionnm" id="compositionid"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Care Instructions</h4>
                      <textarea class="form-control" name="instructionnm" id="instructionid"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                      <h4 class="demo-sub-title">Shipping & Return</h4>
                      <textarea class="form-control" name="shippingnm" id="shippingid"></textarea>
                    </div>
                                    
                  </div>
                  
                 
                  <div class="row m-b-2">
                 
                       <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">Stock Available</h4>
                      <select class="form-control c-select" name="productavailable" required="required" id="productavailable" data-plugin="selectpicker">
                        <!-- <option value="">select</option> -->
                        <option value="0" data-subtext="IN STOCK">YES</option>
                        <option value="1" data-subtext="OUT OF STOCK">NO</option>
                      </select>
                    </div>

                  </div>
                  <div class="row m-b-2">
                   
                       <div class="form-group col-sm-6">
                    <h4 class="demo-sub-title">Priority</h4>
                      <select class="form-control c-select" name="prioritynm" id="priorityid" required="required" data-plugin="selectpicker">
                        <!-- <option value="">Select</option> -->
                        <option value="0" data-subtext="DISPLAY IN HOME">HIGH</option>
                        <option value="1" data-subtext="NOT DISPLAY IN HOME">LOW</option> 
                      </select>
                    </div>

                  </div>



                   <div class="row m-b-2">
                  
                    
                  </div>
                 

                <div class="row m-b-2">
                  <div class="form-group col-sm-4">
                    </div>
                  
                    <div class="form-group col-sm-2">
                      
                      <!-- <input class="form-control tn btn-primary btn-lg" type="submit" > -->
                      <button type="submit" class="form-control tn btn-success btn-lg" name="save" value="save">Save</button>
                    </div>
                    <!-- <div class="form-group col-sm-2">
                      
                      <button class="form-control tn btn-danger btn-lg" type="reset" value="reset">Reset</button>

                    </div> -->
                    <div class="form-group col-sm-2">
                        <a style="cursor: pointer;" class="form-control tn btn-danger btn-lg" onclick="cancelform();"><center>Cancel</center></a>                 
                  </div>
                  <div class="form-group col-sm-4">
                    </div>
                    
                </div>
               

          
           </form>
          </div>
               
                <!-- //fdsfsdf -->
                </div>
            </div>


          <!-- from product other end -->
          <div class="panel-wrapper" id="displaytable">
            <div class="panel" >
              <div class="panel-body table-responsive" style="overflow-x:auto;" id="tablefillextendcat" >
               
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT-->

        </div>
      <!-- END VIEW WAPPER-->

    </div>
   






   <!-- new one end -->
<div class="modal fade-scale" id="trackermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block-header bg-success">View Product</div>
            <div class="modal-body">
                <div class="row m-b-2" >
                    <div class="form-group col-sm-12">
                      <h4 class="demo-sub-title">Product Image<span style="font-size:10px">(min width:600 ,min height:400)</span></h4>
                     
                     <!-- <input class="form-control" type="file"  name="image_file[]" id="productimage"  multiple="multiple" />-->
                     
                      <div id="productimageview"></div>
                      
                    </div>
                    <input type="hidden" id="productidview">
                  </div>

                  
          </div>
           
            <div class="modal-footer">
     <!--        <?php if($_SESSION['adminusertp'] == 'admin'){?>
              <button class="btn btn-success viewmodalbody" onclick="approve();">Approve</button>
              <button class="btn btn-danger"  onclick="reject();">Reject</button>
            <?php }?> -->
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              <!-- <button type="submit" class="form-control tn btn-primary btn-lg" name="save" value="save">Save</button> -->
          </div>
      </div>
    </div>
</div>
               
    





<!-- new one end -->
<div class="modal fade-scale" id="viewshoemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block-header bg-success">View Shoe Quantity</div>
            <div class="modal-body" id="viewshoetable">
                <div class="row m-b-2" >





                  </div>

                  
          </div>
           
            <div class="modal-footer">
   
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              
          </div>
      </div>
    </div>
</div>




<!-- new one end -->
<div class="modal fade-scale" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="block-header bg-success">View Quantity</div>
            <div class="modal-body" id="viewtable">
                <div class="row m-b-2" >





                  </div>

                  
          </div>
           
            <div class="modal-footer">
   
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
              
          </div>
      </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<!-- firebase script put it on header of the template -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-storage.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>



<script src="<?php echo base_url(); ?>/AdminLTE-master/js/jquery-1.11.3.min.js"></script>
 <script src="<?php echo base_url(); ?>/AdminLTE-master/js/html5shiv.js"></script>
 <script src="<?php echo base_url(); ?>/AdminLTE-master/js/jquery-ui.js"></script>
 <script src="<?php echo base_url(); ?>/AdminLTE-master/js/modernizr-custom.js"></script>
 <script src="<?php echo base_url(); ?>/AdminLTE-master/js/respond.js"></script>
 <script src="<?php echo base_url(); ?>/AdminLTE-master/js/tether.min.js"></script>

<script type="text/javascript">
  
  
 var i=0;
 var j=0;
 var Colors="Colors";
 var Image="Image";
function nextadd()
   {
     
     i++;
    
     document.getElementById('count_add_t').value = i;

     $('#appendnext1').append('<br><div id=block'+i+'><div class="form-group col-sm-4"><label class="demo-sub-title">Shoe Size</label><select class="form-control " name="shoesize_nm[]" id="shoesize_id'+i+'" required="required"><option value="">Select</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="30">30</option><option value="32">32</option><option value="34">34</option><option value="36">36</option><option value="38">38</option><option value="40">40</option><option value="42">42</option><option value="44">44</option><option value="46">46</option></select></div><div class="form-group col-sm-4"><label class="demo-sub-title">Color choice</label><select class="form-control" onchange="coloroptioncheck('+i+');" name="colorstat[]" id="colorstat'+i+'" ><option value="Colors">Colors</option><option value="Image">Image</option></select></div><div class="form-group col-sm-4" id="colordropdwn'+i+'"><label class="demo-sub-title">Color</label><select class="form-control" required="required" name="colors[]" id="colors'+i+'"><option value="">Select color</option><option value="White">White</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Green">Green</option><option value="Red">Red</option><option value="Yellow">Yellow</option><option value="Orange">Orange</option><option value="Gray">Gray</option><option value="Brown">Brown</option></select></div><div class="form-group col-sm-4 imgcolors" id="imgclor'+i+'"><label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label><input class="form-control" type="file"  name="image_file1'+i+'" id="colorimage'+i+'" /><input type="hidden" name="imagehid1[]" id="imagehid'+i+'"><div id="imagefill'+i+'"></div></div><div class="form-group col-sm-2"><label class="demo-sub-title">Stock Quantity</label><input required="required" type="text" class="form-control " name="quantitynm[]" id="quantityid'+i+'"  pattern="[0-9.]+" placeholder="Only numbers allowed" value="1"></div>   <div class="form-group col-sm-3"><label class="demo-sub-title">MRP</label><input required="required" type="text" class="form-control " name="mrpwise[]" id="mrpwise'+i+'" oninput="fillsellprice('+i+');" pattern="[0-9.]+" value=""></div><div required="required" class="form-group col-sm-3"><label class="demo-sub-title">Selling Price</label><input type="text" required="required" class="form-control " name="sellpricewise[]" id="sellpricewise'+i+'" onchange="calcitspers('+i+')" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Discount(%)</label><input type="text" class="form-control " name="discountwise[]" id="discountwise'+i+'" onchange="calcdisc('+i+')" pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div><div class="form-group col-sm-1" style="padding-top: 2.8%;"><button class="btn btn-danger" type="button" onclick="removeblock('+i+')" id="subs'+i+'" style="padding: 0px 13px;border-radius: 8px;font-size: 22px;">-</button></div></div>');


     // $('.imgcolors').hide();

     $('#imgclor'+i).hide();
   }

function removeblock(blockid)
   {
         $("#block"+blockid).remove();
   }


   function nextadd1()
   {
     
     j++;
    
     document.getElementById('count_add_p').value = j;

     $('#appendnextp1').append('<br><div id=blockp'+j+'><div class="form-group col-sm-2"><label class="demo-sub-title">Shoe Size</label><select required="required" class="form-control " name="shoesize_nmp[]" id="shoesize_id'+j+'"><option value="">Select</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="30">30</option><option value="32">32</option><option value="34">34</option><option value="36">36</option><option value="38">38</option><option value="40">40</option><option value="42">42</option><option value="44">44</option><option value="46">46</option></select></div><div class="form-group col-sm-2"><label class="demo-sub-title">Size Letter</label><select required="required" class="form-control " name="psizeltr_nmp[]" id="sizeltr_id'+j+'"><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select></div><div class="form-group col-sm-4"><label class="demo-sub-title">Color choice</label><select class="form-control" onchange="coloroptioncheckp('+j+');" name="colorstatp[]" id="colorstatp'+j+'" ><option value="Colors">Colors</option><option value="Image">Image</option></select></div><div class="form-group col-sm-4" id="colordropdwnp'+j+'"><label class="demo-sub-title">Color</label><select class="form-control" required="required" name="colorsp[]" id="colorsp'+j+'"><option value="">Select color</option><option value="White">White</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Green">Green</option><option value="Red">Red</option><option value="Yellow">Yellow</option><option value="Orange">Orange</option><option value="Gray">Gray</option><option value="Brown">Brown</option></select></div><div class="form-group col-sm-4 imgcolors" id="imgclorp'+j+'"><label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label><input class="form-control" type="file"  name="image_filep1'+j+'" id="colorimagep'+j+'" /><input type="hidden" name="imagehid1p[]" id="imagehid'+j+'"><div id="imagefillp'+j+'"></div></div><div class="form-group col-sm-2"><label class="demo-sub-title">Stock Quantity</label><input type="text" required="required" class="form-control " name="quantitynmp[]" id="quantityid'+j+'"  pattern="[0-9.]+" placeholder="Only numbers allowed" value="1"></div>   <div class="form-group col-sm-3"><label class="demo-sub-title">MRP</label><input type="text" class="form-control " name="mrpwisep[]" id="mrpwisep'+j+'" oninput="fillsellprice1('+j+');" required="required" pattern="[0-9.]+" value=""></div><div class="form-group col-sm-3"><label class="demo-sub-title">Selling Price</label><input required="required" type="text" class="form-control " name="sellpricewisep[]" id="sellpricewisep'+j+'" onchange="calcitspers1('+j+')" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Discount(%)</label><input type="text" class="form-control " name="discountwisep[]" id="discountwisep'+j+'" onchange="calcdisc1('+j+')" pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div><div class="form-group col-sm-1" style="padding-top: 2.8%;"><button class="btn btn-danger" type="button" onclick="removeblock1('+j+')" id="subs'+j+'" style="padding: 0px 13px;border-radius: 8px;font-size: 22px;">-</button></div></div>');

      $('#imgclorp'+j).hide();
   }

function removeblock1(blockid)
   {
         $("#blockp"+blockid).remove();
   }


</script>


<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyD5uA4flbdSg27s9Nuc2s2LeHCy1epurR8",
    authDomain: "dentaklik.firebaseapp.com",
    databaseURL: "https://dentaklik.firebaseio.com",
    projectId: "dentaklik",
    storageBucket: "dentaklik.appspot.com",
    messagingSenderId: "641587751147",
    appId: "1:641587751147:web:d0c21ee06236d7f3c0f6ae",
    measurementId: "G-TGFW39VNJJ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<!-- firebase script put it on header of the template -->

     <script src="<?php echo base_url(); ?>/templateadmin/assets/scripts/lib/jquery-1.11.3.min.js"></script>

     <script type="text/javascript">
      $( document ).ready(function() {
          getproduct();
         // findselected();

          $("#productimageview").slick({
                  infinite:true,
                  centerMode: true,
                  variableWidth: true,
                  dots: true,
                  speed: 500,
                  cssEase: 'linear',
                  useTransform:false,
          //      autoplay: true,
          //      autoplaySpeed: 6000,
                  arrows: true
              });

          $('.imgcolors').hide();

      });



      function coloroptioncheck(idnum)
      {
        

        var clorchois = $('#colorstat'+idnum).val();


        if(clorchois=='Image')
        {
          $('#colordropdwn'+idnum).hide();
          $('#imgclor'+idnum).show();
          $('#colors'+idnum).val('');
          $('#colorimage'+idnum).prop('required',true);
          $('#colors'+idnum).prop('required',false);
        }
        else
        {
          $('#colordropdwn'+idnum).show();
          $('#imgclor'+idnum).hide();
          $('#colorimage'+idnum).val('');
          $('#colorimage'+idnum).prop('required',false);
          $('#colors'+idnum).prop('required',true);
        }
      }

       function coloroptioncheckp(idnum)
      {
        

        var clorchois = $('#colorstatp'+idnum).val();


        if(clorchois=='Image')
        {
          $('#colordropdwnp'+idnum).hide();
          $('#imgclorp'+idnum).show();
          $('#colorsp'+idnum).val('');
          $('#colorimagep'+idnum).prop('required',true);
          $('#colorsp'+idnum).prop('required',false);
        }
        else
        {
          $('#colordropdwnp'+idnum).show();
          $('#imgclorp'+idnum).hide();
          $('#colorimagep'+idnum).val('');
          $('#colorsp'+idnum).prop('required',true);
          $('#colorimagep'+idnum).prop('required',false);
        }
      }

      function calcdisc(idnum)
      {
          var sellprise = $('#mrpwise'+idnum).val();
          var discountpers = $('#discountwise'+idnum).val();

          if(sellprise==0 || sellprise=='')
          {
             alert("Please enter selling price first");
          }
          else
          {

              if(discountpers!='' && discountpers!='0')
              {

              var dec = (discountpers / 100).toFixed(2);//its convert 10 into 0.10
               var mult = sellprise * dec; // gives the value for subtract from main value

               var discont = sellprise - mult;

               $('#sellpricewise'+idnum).val(discont);
             }
             else
             {
               $('#sellpricewise'+idnum).val(sellprise);
             }
         }
      }

       function calcdisc1(idnum)
      {
          var sellprise = $('#mrpwisep'+idnum).val();
          var discountpers = $('#discountwisep'+idnum).val();

          if(sellprise==0 || sellprise=='')
          {
             alert("Please enter selling price first");
          }
          else
          {

              if(discountpers!='' && discountpers!='0')
              {

              var dec = (discountpers / 100).toFixed(2);//its convert 10 into 0.10
               var mult = sellprise * dec; // gives the value for subtract from main value

               var discont = sellprise - mult;

               $('#sellpricewisep'+idnum).val(discont);
             }
             else
             {
               $('#sellpricewisep'+idnum).val(sellprise);
             }
         }
      }


      function calcitspers(idnum)
      {
         var mrp = $('#mrpwise'+idnum).val();
         var selprice = $('#sellpricewise'+idnum).val();

         var percent = (selprice/mrp)*100;

         var dsicpers = parseInt(100-percent);

         $('#discountwise'+idnum).val(dsicpers);
      }

       function calcitspers1(idnum)
      {
         var mrp = $('#mrpwisep'+idnum).val();
         var selprice = $('#sellpricewisep'+idnum).val();

         var percent = (selprice/mrp)*100;

         var dsicpers = parseInt(100-percent);

         $('#discountwisep'+idnum).val(dsicpers);
      }



      function fillsellprice(idnum)
      {
        var mrp = $('#mrpwise'+idnum).val();
        $('#sellpricewise'+idnum).val(mrp);
        $('#discountwise'+idnum).val('0');
      }

      function fillsellprice1(idnum)
      {
        var mrp = $('#mrpwisep'+idnum).val();
        $('#sellpricewisep'+idnum).val(mrp);
        $('#discountwisep'+idnum).val('0');
      }



      function getproduct(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_products/displayproducts');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#tablefillextendcat').html(data);
                $('#tablefillcat').DataTable();
                         
              }
             });
      }


  //product edit    

   function editproduct(id){
       
        $('#appendshoe').hide();
        $('#appendnext').hide();

        $('#productimage').val('');
        $("#productimage").prop('required',false);

        $('#formheading').text('Edit Product');
        $( "#addeditform" ).fadeIn( "slow", function() {
        });
         $('#displaytable').hide();
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/editproducts');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){

              var res = JSON.parse(data);
              
              $('#productid').val(res.product_id);
           //   $('#productid').val(res.product_unique_id);
              $('#nameid').val(res.product_name);

          //    $('#categorydivid').hide();
            
          //    $('#categoryid').val(res.product_category);
         //     $('#categoryid1').val(res.product_category);
          //     $('#category').val(res.product_category);
              $('#brandid').val(res.product_brand);
              $('#productrate').val(res.product_rate);
              $('#purchaserate_id').val(res.product_purchase_rate);
              $('#productdiscount').val(res.product_discount);
              $('#sellprice').val(res.product_sell_price);
              $('#descid').val(res.product_desc);
              $('#compositionid').val(res.product_composition);
              $('#instructionid').val(res.product_instruction);
              $('#shippingid').val(res.product_shipping);
              $('#sizeid').val(res.product_sizeno);
              $('#sizeletterid').val(res.product_sizeletter);
             // $('#shoesize_id').val(res.product_shoesizeno);
              $('#colorid').val(res.product_color);
              $('#quantityid').val(res.product_quantity);
              $('#producticonic').val(res.product_iconic);
            //  $('#priorityid').val(res.product_priority);
                  var imgs = res.product_image;
              
              var disprimg = '';
              if(imgs){

                var primg = imgs.split(",");
              for(j = 0;j < primg.length;j++){
                if(primg.length == 1){
                        check = 'one';
                         disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.product_id+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                }else
                if(j == primg.length - 1){
                  check = 'last';
                  disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.product_id+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                }else{
                  check = 'first';
                  disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.product_id+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                }
              }
               }else{
                disprimg = "";
               }
             $('#imagefill').html(disprimg);
              
                  $('#imagehid').val(res.product_image);
       
         $('#priorityid').selectpicker('val', res.product_priority);
          $('#shoesize_id').selectpicker('val', res.product_shoesizeno);
          

             if(res.product_category==3)
             {

                $('#category').selectpicker('val', res.product_category);

                if(res.subcategory_name=='Footwear' || res.subcategory_name=='footwear' || res.subcategory_name=='Sheos' || res.subcategory_name=='sheos')
                {
                  
                  $('#subcategory').val(res.subcategory_name);
                  
                   $('#colorsheo').show();
                   $('#colorothr').hide();
                   
                   var prodsizes=res.product_shoesizeno;
                   var productcolor=res.product_color;
                   var productselprc=res.product_sellpricewise;
                   var productmrp=res.product_mrpwise;
                   var productdiscnt=res.product_discountwise;

                   var pcomastat = prodsizes.includes(",");

                   var appentstring='';

                   if(pcomastat==true)
                   {
                      

                     var sizeary = prodsizes.split(',');
                     var colrary = productcolor.split(',');
                     var selprcary = productselprc.split(',');
                     var mrpcary = productmrp.split(',');
                     var discntcary = productdiscnt.split(',');

                     for(var s=0;s<sizeary.length;s++)
                     {

                       var cdotastat = colrary[s].includes(".");

                        if(cdotastat==true)
                        {
                           var colorsectn = '<div class="form-group col-sm-4"><label class="demo-sub-title">Color choice</label><select class="form-control" onchange="coloroptioncheck('+s+');" name="colorstat[]" id="colorstat'+s+'" ><option value="Image">Image</option><option value="Colors">Colors</option></select></div><div class="form-group col-sm-4" id="colordropdwn'+s+'"><label class="demo-sub-title">Color</label><select class="form-control" name="colors[]" id="colors'+s+'"><option value="">Select color</option><option value="White">White</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Green">Green</option><option value="Red">Red</option><option value="Yellow">Yellow</option><option value="Orange">Orange</option><option value="Gray">Gray</option><option value="Brown">Brown</option></select></div><div class="form-group col-sm-4 imgcolors" id="imgclor'+s+'"><label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label><input class="form-control" type="file"  name="image_file1'+s+'" id="colorimage'+s+'" /><input type="hidden" name="imagehid1[]" id="imagehid'+s+'"><div id="imagefill'+s+'"></div></div>';
                        }
                        else
                        {
                            var colorsectn = '<div class="form-group col-sm-4"><label class="demo-sub-title">Color choice</label><select class="form-control" onchange="coloroptioncheck('+s+');" name="colorstat[]" id="colorstat'+s+'" ><option value="Colors">Colors</option><option value="Image">Image</option></select></div><div class="form-group col-sm-4" id="colordropdwn'+s+'"><label class="demo-sub-title">Color</label><select class="form-control" name="colors[]" id="colors'+s+'"><option value="">Select color</option><option value="White">White</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Green">Green</option><option value="Red">Red</option><option value="Yellow">Yellow</option><option value="Orange">Orange</option><option value="Gray">Gray</option><option value="Brown">Brown</option></select></div><div class="form-group col-sm-4 imgcolors" id="imgclor'+s+'"><label class="demo-sub-title">color image<span style="font-size:10px">(width:30px ,height:29px)</span></label><input class="form-control" type="file"  name="image_file1'+s+'" id="colorimage'+s+'" /><input type="hidden" name="imagehid1[]" id="imagehid'+s+'"><div id="imagefill'+s+'"></div></div>';
                        }

                       if(s==0)
                       {
                        
                        

                         appentstring+='<div id=block'+s+'><div class="form-group col-sm-4"><label class="demo-sub-title">Shoe Size</label><select class="form-control " name="shoesize_nm[]" id="shoesize_id'+s+'"><option value="">Select</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="30">30</option><option value="32">32</option><option value="34">34</option><option value="36">36</option><option value="38">38</option><option value="40">40</option><option value="42">42</option><option value="44">44</option><option value="46">46</option></select></div>'+colorsectn+'<div class="form-group col-sm-2"><label class="demo-sub-title">Stock Quantity</label><input type="text" class="form-control " name="quantitynm[]" id="quantityid'+s+'"  pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div>   <div class="form-group col-sm-3"><label class="demo-sub-title">MRP</label><input type="text" class="form-control " name="mrpwise[]" id="mrpwise'+s+'" oninput="fillsellprice('+s+');" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Selling Price</label><input type="text" class="form-control " name="sellpricewise[]" id="sellpricewise'+s+'" onchange="calcitspers('+s+')" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Discount(%)</label><input type="text" class="form-control " name="discountwise[]" id="discountwise'+s+'" onchange="calcdisc('+s+')" pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div><div class="form-group col-sm-1" style="padding-top: 2.8%;"><button class="btn btn-success" type="button" onclick="nextadd()" id="subs'+s+'" style="padding: 0px 13px;border-radius: 8px;font-size: 22px;">+</button></div></div><br>';
                       }
                       else
                       {
                         appentstring+='<div id=block'+s+'><div class="form-group col-sm-4"><label class="demo-sub-title">Shoe Size</label><select class="form-control " name="shoesize_nm[]" id="shoesize_id'+s+'"><option value="">Select</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="30">30</option><option value="32">32</option><option value="34">34</option><option value="36">36</option><option value="38">38</option><option value="40">40</option><option value="42">42</option><option value="44">44</option><option value="46">46</option></select></div>'+colorsectn+'<div class="form-group col-sm-2"><label class="demo-sub-title">Stock Quantity</label><input type="text" class="form-control " name="quantitynm[]" id="quantityid'+s+'"  pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div>   <div class="form-group col-sm-3"><label class="demo-sub-title">MRP</label><input type="text" class="form-control " name="mrpwise[]" id="mrpwise'+s+'" oninput="fillsellprice('+s+');" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Selling Price</label><input type="text" class="form-control " name="sellpricewise[]" id="sellpricewise'+s+'" onchange="calcitspers('+s+')" pattern="[0-9.]+" value="0"></div><div class="form-group col-sm-3"><label class="demo-sub-title">Discount(%)</label><input type="text" class="form-control " name="discountwise[]" id="discountwise'+s+'" onchange="calcdisc('+s+')" pattern="[0-9.]+" placeholder="Only numbers allowed" value="0"></div><div class="form-group col-sm-1" style="padding-top: 2.8%;"><button class="btn btn-danger" type="button" onclick="removeblock('+s+')" id="subs'+s+'" style="padding: 0px 13px;border-radius: 8px;font-size: 22px;">-</button></div></div><br>';
                       }


                       if(cdotastat==true)
                        {
                          alert("hi");
                          $('#colordropdwn'+s).hide();
                          $('#imgclor'+s).show();
                        }
                        else
                        {
                          $('#imgclor'+s).hide();
                          $('#colordropdwn'+s).show();
                        }  

                       
                     }

                  $('#appendnext').html(appentstring); 

                  // alert(appentstring);   

                   }
                }

             }
          

     
            }
        });
      }

//product edit



         function clearall(){
        
        $('#productid').val('');
        //  $('#categorylistdiv1').hide();
        //  $('#categorylistdiv2').hide();
        //  $('#subcategorydiv1').hide();
        //  $('#subcategorydiv2').hide();
        $('#nameid').val('');
      //  $('#checkoper').val('add');
        $('#formheading').text('Add Product');
        
        $( "#addeditform" ).fadeIn( "slow", function() {
        });
         // $( "#addeditform" ).fadeIn();
         $('#displaytable').hide();
        $('#productrate').val('');       
         $('#purchaserate_id').val('');
         $('#productdiscount').val('');
        // $('#productdisplay').selectpicker('val', '');
      //   $('#productbrand').selectpicker('val', '');
         $('#image_file').val('');
         $('#productimage').val('');
         $("#productimage").prop('required',true);
         $('#imagefill').html('');
         $('#imagehid').val('');
      //   $(".summernote").summernote("reset"); 
        $('#sellprice').val('');
        $('#categoryid').val('');
        $('#categoryid1').val('');
      //   $('#product_rating').val('');

          getproduct();
        
      //    $('#subcategory').selectpicker('val', '');
       //   $('#categoryid').selectpicker('val', '');
          $('#priorityid').selectpicker('val', '');
          $('#shoesize_id').selectpicker('val', '');
          $('#subcategory').selectpicker('val', '');

          $('#descid').html('');
          $('#compositionid').val('');
          $('#instructionid').val('');
          $('#shippingid').val();
          $('#sizeid').val('');
          $('#sizeletterid').val('');
        //   $('#shoesize_id').val('');
          $('#colorid').val('');
          $('#quantityid').val('');
        //  $('#productavailable').selectpicker('val', '');

        $('#colorsheo').hide();

        $('#appendnext1').html('');

      }

      
   function cancelform(){
        $('#addeditform').hide();
        // $( "#addeditform" ).fadeOut( "slow", function() {
        // });
        $( "#displaytable" ).fadeIn( "slow", function() {
        });
      }
     
       $(function () {
            $("#sellprice").on('input',function () {
    


              var sellprice1 = parseFloat($("#sellprice").val());
              var prodrate1 = parseFloat($("#productrate").val());

         if(sellprice1>prodrate1)
         {
           alert("selling price cannot be greater than MRP");
           $("#sellprice").val('');
         }     
         else
         {
              var checknan = isNaN(sellprice1);
              
              if(sellprice1 <= prodrate1 && checknan == false){
                var prodcomm1 = parseFloat($("#productcomm").val());
                var proddisc = sellprice1 * 100 /prodrate1;
                var proddisc2 =  100 - proddisc;
                $("#productdiscount").val(proddisc2);
                var discprice = sellprice1 * prodcomm1 / 100 + sellprice1;
                $("#productdiscountprice").val(discprice);
              }else{ if(checknan){
                  $("#sellprice").val('');
                }
              }

          }
              // else{
              //   $("#sellprice").val('');
              //   alert('Enter amount less than product rate');
              // }
            });
        });
     $(function () {
            $("#productrate,#productdiscount,#productcomm").on('input',function () {


           
                var productrate = parseFloat($("#productrate").val());
                var productdiscount = parseFloat($("#productdiscount").val());
                var productcomm = parseFloat($("#productcomm").val());
                if(productdiscount > 0 && productrate > 0  && productcomm > 0){
                  // var num3perc = 100 - num3;
                  var comm = productrate * productcomm / 100;
                  var totcomm = productrate + comm;
                    
                   $("#prodaddedcomm").val(totcomm);
                   var product_discount = productrate * productdiscount / 100;
                   var sell_price = productrate - product_discount;
                   var commission = sell_price*productcomm/100;
                   var total_sell_price = commission + sell_price;

                  $("#productdiscountprice").val(total_sell_price);
                   var product_discount = productrate * productdiscount / 100;
                   var sell_price = productrate - product_discount;
                   //alert(sell_price);
                  $("#sellprice").val(sell_price);
                }else if(productdiscount == 0 && productrate > 0  && productcomm > 0){
                  var num3percant = 100 - productcomm;
                  var comms = productrate * productcomm / 100;

                  var totcomms = productrate + comms;

                  $("#prodaddedcomm").val(totcomms);
                  $("#productdiscountprice").val(totcomms);
                  $("#sellprice").val(productrate);  
                }else{
                  $("#productdiscountprice").val('');
                  $("#prodaddedcomm").val('');
                  $("#sellprice").val('');  
                }
                
            })
        });
      $('#category').on('change', function() {

                 $.ajax({
                      method: "POST",
                      url: "<?php echo base_url('index.php/Admin_products/getsubcategorydrpdwn');?>/",
                     // data: form.serialize(), // serializes the form's elements.
                      data:{id:this.value}, 
                     success: function(data){
                       // $('#subcategorydiv1').show();
                       // $('#subcategorydiv2').hide();
                         // $('#subcategory').selectpicker('val', data);
                         $('#subcategory').val(data);   
                          check_shoecat();                         
                    }

                   });
                   
      });

      // $('#category1').on('change', function() {

      //            $.ajax({
      //                 method: "POST",
      //                 url: "<?php echo base_url('index.php/Admin_products/getsubcategorydrpdwn');?>/",
      //                // data: form.serialize(), // serializes the form's elements.
      //                 data:{id:this.value}, 
      //                success: function(data){

      //                 //  $('#subcategorydiv2').show();
      //                //   $('#subcategorydiv1').hide();
      //                    $('#subcategory1').selectpicker('val', data);            
      //               }
      //              });
      // });


       $('#subcategory').on('change', function() {

                 $.ajax({
                      method: "POST",
                      url: "<?php echo base_url('index.php/Admin_products/getcategorydrpdwn');?>/",
                     // data: form.serialize(), // serializes the form's elements.
                      data:{id:this.value}, 
                     success: function(data){
                      //  $('#categorylistdiv1').hide();
                      //  $('#categorylistdiv2').show();
                         $('#category').selectpicker('val', data);            
                    }
                   });
      });
       $('#subcategory1').on('change', function() {

                 $.ajax({
                      method: "POST",
                      url: "<?php echo base_url('index.php/Admin_products/getcategorydrpdwn');?>/",
                     // data: form.serialize(), // serializes the form's elements.
                      data:{id:this.value}, 
                     success: function(data){
                   //   $('#categorylistdiv2').hide();
                    //  $('#categorylistdiv1').show();
                         $('#category1').selectpicker('val', data);            
                    }
                   });
      });

      function check_shoecat(){
        $add_sizecategory=$("#category").val();
       // alert($add_sizecategory) ; 
        if($add_sizecategory=='shoe'){
           $('#appendshoe').show();
           $('#appendnext').hide();
        }
        else{
          $('#appendnext').show();
          $('#appendshoe').hide();
        }
      }


      $("#idFormproduct").submit(function(e) {
     //   var name=$("input[name=namenm]").val();
     //   alert(name);
         e.preventDefault();

          //initialsie the array to be passed to firebase
          var productimage = document.getElementById('productimage');
          var count = productimage.files.length;

          var files_array = []; // array where every image is stored
          var i;
          
          for(i=0;i<count;i++)
          {
            var image = productimage.files[i];
            files_array.push(image); 
          }
          //initialsie the array to be passed to firebase
          
         var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_products/insertproduct');?>/",
                data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false, 
               success: function(data){
                alert(data);
                if(data == "success"){
                  notifyresult('Data Saved','success');
                  // $('#trackermodal').modal('hide');
                  $('#addeditform').hide(); 
                  $( "#displaytable" ).fadeIn( "slow", function() {                     
                  });
                  getproduct();
                }                           
                else
                {
                  notifyresult('Error','danger');
                  $('#trackermodal').modal('hide');
                  getproduct();
                }            
              }
          });
      });
      

      
      function deleteproduct(id,img){
        var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/delete');?>/",
              data: {id:id,imagename:img}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                 
                   getproduct();
               }else{
                  notifyresult('Data Deleted','success');
                  // notifyresult('Error','danger');
                  getproduct();
                
               }
               

            }
        });
          }
        
      }
        
            function deleteimage(id,img,check){
              var result = confirm("Do you want to delete?");
               if (result) {
        
                  $.ajax({
                      method: "POST",
                      url: "<?php echo base_url('index.php/Admin_products/deleteimage');?>/",
                      data: {id:id,img:img,check:check}, // serializes the form's elements.
                     success: function(data){

                      var res = JSON.parse(data);
                      // console.log(data);
                      // alert(res.prod_reject_reason);
             
                      if(res.status == 1){

                        notifyresult('Image Removed','success');
                      }else{
                        notifyresult('Error','danger');
                      }
                      var imgs = res.images;
                      

                      var disprimg = '';
                    if(imgs){
                      var primg = imgs.split(",");
                   
                     for(j = 0;j < primg.length;j++){
                      if(primg.length == 1){
                        check = 'one';
                        disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.resprim+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                      }else
                      if(j == primg.length - 1){
                        check = 'last';
                        disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.resprim+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                      }else{
                        check = 'first';
                        disprimg = disprimg + '<div style="display:inline;"><img  style="width:100px;height:100px;hspace:20;"src="<?php echo base_url();?>/uploads/'+primg[j]+'"><a title="Remove" style="cursor:pointer;position:absolute;margin-left:-15px;" onclick="deleteimage(\''+res.resprim+'\',\''+primg[j]+'\',\''+check+'\');"><i class="icon ion-close-circled"></i></a></div>' + '  ';
                      }
                    }
                     }else{
                      disprimg = "";
                     }
                     $('#imagefill').html(disprimg);
                      
                      $('#imagehid').val(res.images);
                       
                        

                    }
                });
              }
            
            }


            function productavailable(id,status){

      
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/productavailable');?>/",
              data: {id:id,status: status}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Product Updated','success');
                  
                   getproduct();
               }
               

            }
        });
            
          
        
      }
       
      
      function viewproduct(id){
        $('#productimageview').slick('removeSlide', null, null, true);
       
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/editproducts');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              var res = JSON.parse(data);
              // console.log(data);
              
              $('#productidview').val(res.product_id);
             
              var imgs = res.product_image;
              var primg = imgs.split(",");
              
              for(j = 0;j < primg.length;j++){
                $('#productimageview').slick('slickAdd','<img  class="img-fluid"  src="<?php echo base_url();?>/uploads/'+primg[j]+'">');
                
              }
             
              
              $('#imagehid').val(res.product_image);

            }
        });
        
      }


       function viewshoequantity(id){
     
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/shoequantity');?>/",
              data: {id:id}, 
             success: function(data){
          //    var res = JSON.parse(data);
              // console.log(data);
              $('#viewshoetable').html(data);
            }
        });
        
      }
      

       function viewquantity(id){
     
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/quantity');?>/",
              data: {id:id}, 
             success: function(data){
          //    var res = JSON.parse(data);
              // console.log(data);
              $('#viewtable').html(data);
            }
        });
        
      }


      function getsubcats()
      {
        var catid = $('#category').val();
       
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_products/getscatsubcats');?>/",
              data: {catid:catid}, 
             success: function(data){
          //    var res = JSON.parse(data);
              
              $('#subcategorydiv1').html(data);
            }
        });
      }


      function getsubsdivs()
      {
        var sbname = $('#subcategory').val();
         $.ajax({
                      method: "POST",
                      url: "<?php echo base_url('index.php/Admin_products/getdivisiononsub');?>/",
                      data: {sbname,sbname}, // serializes the form's elements.
                     success: function(data){
                      // console.log(data);
                      $('#subcategorydiv2').html(data);
                     
                       checksubcattype();       
                    }
                   });
      }


      function checksubcattype()
      {
        var subname = $('#subcategory').val();

        if(subname=='Footwear' || subname=='footwear' || subname=='Sheos' || subname=='sheos' )
        {
           $('#colorsheo').show();
           $('#colorothr').hide();

           $('#shoesize_id0').prop('required',true);
           $('#colors0').prop('required',true);
           $('#quantityid0').prop('required',true);
           $('#mrpwise0').prop('required',true);
           $('#sellpricewise0').prop('required',true);

           $('#shoesize_idp0').prop('required',false);
           $('#sizeltr_id0').prop('required',false);
           $('#colorsp0').prop('required',false);
           $('#quantityidp0').prop('required',false);
           $('#mrpwisep0').prop('required',false);
           $('#sellpricewisep0').prop('required',false);

           $('#appendnextp1').html();
        }
        else
        {
           $('#colorsheo').hide();
           $('#colorothr').show();

            $('#shoesize_id0').prop('required',false);
           $('#colors0').prop('required',false);
           $('#quantityid0').prop('required',false);
           $('#mrpwise0').prop('required',false);
           $('#sellpricewise0').prop('required',false);

           $('#shoesize_idp0').prop('required',true);
           $('#sizeltr_id0').prop('required',true);
           $('#colorsp0').prop('required',true);
           $('#quantityidp0').prop('required',true);
           $('#mrpwisep0').prop('required',true);
           $('#sellpricewisep0').prop('required',true);


           $('#appendnext1').html();
        }
      }

    </script>
   
   
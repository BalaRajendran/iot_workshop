        <html>
    <head>
    <title>Registered Database</title>
        <link rel="shortcut icon" href="images/icon.jpg"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <script type="text/javascript" src="http://www.farmingarms.com/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function deleteConfirm(){
        var result = confirm("Are you sure to delete?");
        if(result){
            return true;
        }else{
            return false;
        }
    }

    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });

        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
    </script>
        <style type="text/css">
			h1{
	padding: 20px 30px 20px 30px;
	margin: 0px 20px 10px 20px;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: center;
				color: #719dab;
			}
			p{
				text-align: center;
				font-size: 16px;
	font-style: italic;
	color: #2d6277;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
			}
            body {
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);
	font-weight: 400;
	font-size: 15px;
	color: #3a2127;
	overflow-y: scroll;
            }
            table {
                margin: auto;
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
                font-size: 12px;
            }

            table td {
                transition: all .5s;
            }

            /* Table */
            .data-table {
                border-collapse: collapse;
                font-size: 14px;
                min-width: 537px;
            }

            .data-table th, 
            .data-table td {
                border: 1px solid #e1edff;
                padding: 7px 17px;
            }
            .data-table caption {
                margin: 7px;
            }

            /* Table Header */
            .data-table thead th {
                background-color: #508abb;
                color: #FFFFFF;
                border-color: #6ea1cc !important;
                text-transform: uppercase;
            }

            /* Table Body */
            .data-table tbody td {
                color: #353535;
            }
            .data-table tbody td:first-child,
            .data-table tbody td:nth-child(4),
            .data-table tbody td:last-child {

            }
.data-table tbody tr:nth-child(even) td {
                background-color: #f2f2f2;
}
            .data-table tbody tr:nth-child(odd) td {
                background-color: #f4fbff;
			}
            .data-table tbody tr:hover td {
                background-color: #ffffa2;
                border-color: #ffff0f;
            }

            /* Table Footer */
            .data-table tfoot th {
                background-color: #e5f5ff;
        text-align: right;
            }
            .data-table tfoot th:first-child {
                text-align: left;
            }
            .data-table tbody td:empty
            {
                background-color: #ffcccc;
            }
            img{
                width: 100px;
            }

          th:first-child{
            width:50px;
          }
            .qw{
            width:300px;
                text-align:center;
            }
            .qww{
                text-align:center;
            }
        </style>
    </head>

    <body>
      <?php
    $username = 'BalajiNandha';
    $password = '@Itengineer007';
    $db = new PDO('mysql:host=208.91.198.197:3306;dbname=farmingarms', $username, $password );
      $sql="select * from reg_py ORDER BY id";
      $result=$db->query($sql);
      $result->setfetchmode(PDO::FETCH_ASSOC);
    ?>

    <form name="form" action="delete3.php" method="post" onsubmit="return deleteConfirm();"/>
      <br>
        <table class="data-table">
        <h1>   M.KUMARASAMY COLLEGE OF ENGINEERING<br/>
			THALAVAPALAYAM,KARUR-639001</h1>
			<p style="margin-top:-20px;">Department Of Information Technology <br/>
				IOT Workshop </p><br/><h1 style="margin-top:-50px;">Registered List</h1><br>
            <thead>
            <tr>
				<th>Check Box</th>
          <th >S.No</th>
          <th >Student Name</th>
          <th >Email</th>
        <th >Institution Name</th>
				<th >Department</th>
				<th >Designation</th>
          <th >Year</th>
        <th >Mobile Number</th>
				<th >Accomodation</th>
            </tr>
            </thead>
          <tbody>
            <?php
    $no= 1;
               while( $row=$result->fetch())
               {
            ?>
            <tr>
                <td  align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
                  <td ><?php echo $no ?></td>
				<td class="qw"><?php echo $row['name']; ?></td>
                <td class="qw"><?php echo $row['email']; ?></td>
				<td class="qw"><?php echo $row['ins']; ?></td>
				<td class="qw"><?php echo $row['dept']; ?></td>
				<td class="qw"><?php echo $row['re']; ?></td>
                <td class="qw"><?php echo $row['year']; ?></td>
				  <td class="qw"><?php echo $row['pno']; ?></td>
                  <td class="qw"><?php echo $row['acc']; ?></td>
				

            </tr> 
            <?php 
             $no++;
               }
            $db=null;
            ?>
            <tr>
                <td colspan="2" align="center"> <strong>Select All&nbsp;&nbsp;<input type="checkbox" name="select_all" id="select_all" value=""/> </strong> </td>

                <td colspan="3" align="center">  <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/> </td>
				<td colspan="4" align="center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_record_modal">Click to reply</button></td>
			
          
		</form>
          
			<td><form method="post" action="explore.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
				</form></td>   </tr> </tbody>
			</table>
			<div class="modal fade"  id="add_new_record_modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mail send to all Email Id where the students are entered</h4>
            </div>
                 <form action="verify.php" method="POST">
                  <div class="modal-body">
                  <div class="form-group">
                    <label for="update_Serial_No">Enter message to send Mail</label>
                    <textarea type="text" placeholder="Message" rows="10" name="msg" class="form-control" required></textarea>
					 </div> </div>
       		     
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button  class="btn btn-primary" name="sub" onclick="UpdateUserDetails()" >Send</button>
                <input type="hidden" id="hidden_user_id">
            </div>
					 </form>
        </div>
    </div>
			</div>
			<br/><h4><i><u>Testing & Designed By</u></i><br/><br/>Balaji R<br/>Department Of Information Technology<br/>MKCE</h4>
    </body>
    </html>

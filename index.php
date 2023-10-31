<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Application</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href=https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <div class ="container-fluid">
            <div class="jumbotron" backgroundcolor="red">
                <h1> CRUD OPERATION </h1>
                <p>Create Read Update Delete</p>
            </div>
            <div class ="row">
                <div class ="col-md-3">
                    <h2 class ='page-header'><i class ="fa fa-edit"></i>Add Students</h2>
                    <form id="frm">
                    
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" id="Name" placeholder="Enter Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" Name="Age" id="Age" placeholder="Enter Age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" Name="City" id="City" placeholder="Enter City" class="form-control">
                        </div>
                        <div class="form-group">
                           <input type="hidden" id="id" Name="id" value="0">
                            <input type="button" class="btn btn-success" id="Save" value="SAVE DETAILS">
                        </div>
                    </form>
                </div>
                <div class="col-md-9" id="output">
            </div>
                </div>
            </div>
        </div>
<script>
    $(document).ready(function()
    {
        $("#output").load("view.php");
       $("#Save").click(function()
       {
        var id=$("#id").val();
        if(id==0)
        {
         $.ajax
         ({
            url:"insert.php",
            type:"POST",
            data:$("#frm").serialize(),
           success:function(d)
           {
                 $("<tr></tr").html(d).appendTo (".table");
                 $("#frm")[0].reset();
                 $("#id").val("0");
            }
         
        
         });
        }
       else
       {
            $.ajax
            ({
               url:"update.php",
               type:"POST",
               data:$("#frm").serialize(),
               success:function(d)
               {
                  $("#output").load("view.php");     
                  $("#frm")[0].reset();
                 $("#id").val("0");
                }
                
            });
        }
       });
    
       $(document).on("click",".del",function()
       {
         var del=$(this);
         var id=$(this).attr("data-id");
         $.ajax({
            url:"delete.php",
            type:"POST",
            data:{Id:id},
           success:function()
           {
                 del.closest("tr").hide();
            }         
        });
       });
       $(document).on("click",".edit",function()
       {
         var row=$(this);
         var id=$(this).attr("data-id");
         $("#id").val(id);

         var Name=row.closest("tr").find("td:eq(0)").text();
         $("#Name").val(Name);
         var Age=row.closest("tr").find("td:eq(1)").text();
         $("#Age").val(Age);
         var City=row.closest("tr").find("td:eq(2)").text();
         $("#City").val(City);
         
         
       });



    });
</script>        
           
    </body>    
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add this in your <head> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
          /* cards design ui */
    .card {
    background: white;
	border: 1px solid gray;
    border-radius: 7px;
    padding: 10px;
	}
    
    .card-header {
    display: flex;
    flex-direction: row;
    }
    
    .card-header:nth-child(1) {
	justify-content: start;
	}
    
    .details-container {
	border: 1px solid gray;
    flex: 1;              /*  */
    min-width: 120px;     /* minimum before wrapping */
    }
    
    .details-container ul {
    border: 1px solid gray;
	display: flex;
    flex-direction: column;
    justify-content: start;
    margin: 0px;
    margin: 0px;
    padding: 20px;
	}
    
    .description-container {
	border: 1px solid gray;
    /* width: 290px; */
    flex: 1;              /* takes remaining space */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    min-width: 0;          /* prevents overflow */
	}
    
    .description {
		border: 1px solid gray;
        border-radius: 7px;
        padding: 30px 10px;
        padding: 4px;
        width: 100%; 

	}
    .description p {
    	margin: 0;
		word-wrap: break-word;
	}
    
    .footer {
	border: 1px solid gray;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;      /* wraps to next line on small screens */
    }
    
    span {
	/* border: 1px solid gray; */
    height: 20px;
    margin-top:3px;
    padding: 4px 20px;
    border-radius: 10px;
    }
    
    .image-container {
	border: 1px solid gray;
    border-radius: 10px;
    width: 110%;
    }
    
    .cover {
	object-fit: cover;
    }
    
    .status {
	border: 1px solid gray;
    width: 100%;
    display: flex;
    justify-content: center;
    }

    .image-container img {
    width: 100%;          /* fills its container */
    max-width: 100%;      /* never overflows */
    height: 150px;        /* fixed height */
    object-fit: cover;    /* crops nicely */
    display: block;
    }




        body {
            background: #ffffff;
            padding: 0px;
            margin: 0px;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row;
            width: 100%;

        }

        .main {
            border: 1px solid gray;
            margin-left: 10px;
            width: 100%;
            /* margin-bottom: 10px; 
            margin: 10px;    */

           
        }

        .header {
            display: flex;
            flex-direction: column;
            border-left: 7px solid blue;

            position: sticky;    /* stays on screen while scrolling */
            top:0;

            
            margin-bottom: 10px; 
            background: white;

            box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
        }

        .header h1 ,
        .header h2,
        .header p {
            height: 3px;
            margin-left: 5px;
        }

        .middle_content {
            border: 1px solid gray;
            margin-bottom: 10px; 
            background: white;
        }

        .content {
            height: 85vh;
            border: 1px solid gray;
            margin-bottom: 10px; 
            background: #fbfeff;
        }

        .cards {
            display: grid;
            gap: 30px;
            
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            padding: 10px;
        }

        .card:hover {
            border: 2px solid gray;
            cursor: pointer;
            
        }


        .overlay-container {
            /* display: none;
            
            position: fixed;
            background: #0000003d;
            margin: 0;
            width: 100%;
            inset: 0;

            
            flex-direction: column;
            justify-content: center;
            align-items: center; */

                display: none;
                position: fixed;
                inset: 0;              /* top:0, right:0, bottom:0, left:0 */
                width: 100vw;          /* full viewport width */
                height: 100vh;         /* full viewport height */
                background: rgba(0,0,0,0.5);
                z-index: 999;          /* must be on top of everything */

                justify-content: center;
                align-items: center;
            
        }

        .overlay {
            /* border: 1px solid black;
            height: 50%;
            max-height: 100%;
            display: flex;
            justify-content: center; */

               width: 500px;          /* fixed width */
                max-width: 90%;        /* responsive on small screens */
                height: auto;          /* grows with content */
                max-height: 80vh;      /* never taller than viewport */
                overflow-y: auto;      /* scroll if content is too long */
                background: white;
                border-radius: 10px;
                border: 1px solid gray;

        }

        .overlay-box {
            /* border: 2px solid gray;
            border-radius: 7px;
            background: white;

            height: 100%;
            width: 100%;
            max-width: 100%;
            max-height: 100%; */

            padding: 20px;

            padding: 15px;
            height: 100%;
            box-sizing: border-box;
        }

        .overlay-box div,
        .overlay-box .header-box
        {
            border: 1px solid black;
            border-radius: 5px;
        }

        .overlay-box header {
            display: flex;
            justify-content: end;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            
        }

        .cover {
            transition: transform 0.3s ease;
        }


        .card:hover .cover {
            transform: scale(1.1);
        }

        .navBar {

            background: white;
            width: 420px;        /* ← was 500px, way too wide */
            height: 100vh;
            position: sticky;
            top: 0;
            flex-shrink: 0;      /* ← add this, never let it shrink */
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            
            
        }

        .main {
    flex: 1;            /* ← replaces width: 100% */
    min-width: 0;       /* ← prevents flex overflow */
   
    position: relative; /* ← remove absolute */
    /* overflow-x: hidden; */
}



        .navBar .foot{
            /* border: 1px solid black; */
            height: 7rem;
            background-color: gray;
             background-color: #030b0f;
        }

        .navBar nav {
            display: flex;
            flex-direction: column;
            /* border: 1px solid black; */
            flex: 1;
            /* justify-content: space-between; */
            align-items: center;
            /* border: 1px dashed black; */
            box-sizing: border-box;

        }

        nav div {
            box-sizing: border-box;
            /* border: 1px solid gray; */

            height: 50px;
            width: 100%;

            display: flex;
            align-items: center;

            margin-right: 10px;
            margin-left: 10px;

            margin-top: 10PX    ;
            
        }

        nav div span {
            /* background: yellow; */
             display: flex;
            
            justify-content: center;
            align-items: center;
            border: none;

            background: transparent;
            
        }

        nav a {        
            box-sizing: border-box;
            width: 300px;
            text-decoration: none;
            /* border: 1px solid gray; */
            width: 100%;
            height: 45px;
            display: flex;
            
            justify-content: start;
            align-items: center;
            margin-right: 10px;
            margin-left: 10px;

            border-radius: 10px;
            background: #759b72;
            background: #33a658;

        }

        .fourth a {
            border-radius: 10px;
            background: #141d4d;
        }

        .fourth a:hover {
            background: #27337e;
        }

        .fourth p{
            color: white;
        }


        a:hover {
            background: #8bb788;
        }

        a:active {
            background: #688a66;
        }


        nav a span P {
            font-weight: bold;
            color: black;
        }
        /* /////// */

        .searchBar input {
            height: 3.5rem;
            border-radius: 7px;
            font-size: 18px;

        }


        .searchBar {
             position: relative;
             margin-left: 10px;
        }

        .searchBar label {
            position: absolute;
            left: 1px;
            bottom: 25%;
            /* transition: translateY(-50%); */         
            
        }
        /* /////////////////////////////////////////////////////////////////////////////////////////// */

                .content {
            border: 1px solid gray;
            max-height: 100%;

            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        /* .card_report {
            background: white;
            border: 8px solid gray;
            border-radius: 6px;
            max-width: 800px;
            width: 630px;
            padding: 20px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        } */

        .form-container {
            width: 100%;
            max-width: 100%;
        }

        .title {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .items {
            border: 1px solid gray;
            width: 30px;
            margin-bottom: 30px;
        }

        .items {
            margin-top: 5px;

            max-width: 100%;
            max-height: 100%;

            width: 100%;
            height: 200px;
            border-radius: 10px;

            box-sizing: border-box;
           

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            


        }

        .panel {
            margin-bottom: 10px;
            box-sizing: border-box;

            /* border: 1px solid gray; */
            max-width: 100%;
            max-height: 100%;

            width: 100%;
            height: 100px;
            padding: 10px;
        }


        .fifth-row {
            overflow: hidden;
        }

        .item {
            position: relative;
            max-width: 100%;
            width: 100%;
            

        }

        .item label {
            position: absolute;
            left: 10px;
            transition: 0.3s ease;
            bottom: 10px;
        }


        .item input,.item textarea {
            box-sizing: border-box; /* prevents overflow */
            width: 100%;
            height: 40px;
            border-radius: 8px;
            font-size: 16px;
        }

        .item textarea {
            height: 100px;
        }

        .item input:HOVER, .item label:hover {
            cursor: pointer;
        }

        input:hover, label:hover{
            cursor: auto;
        }

        .item .textarea_label {
            bottom: 80px;
        }

        input:not(:placeholder-shown) ~ label{
            left: 3px;
            top:  -30px;     
            color: #1a1a1a;
        }

        /* .inner-panel input:not(:placeholder-shown) {
            border: 2px solid #34db5e;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.3);
        } */

        /* .inner-panel input:(:placeholder-shown) {
            border: 2px solid #e13939; 
            box-shadow: 0 0 8px rgba(219, 108, 52, 0.3); 
        
        */

        /* .inner-panel input:placeholder-shown:not(:focus) {
            border: 2px solid #e74c3c; 
            background-color: #fdf2f2; 
        } */

        .third-row .item input {
            border-radius: 0px;
            borrder: 1px solid gray;
        }

        .fifth-row {
           box-sizing: border-box; 
           width: 100%;
           height: 5vh;
        }

        .btn {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;          /* makes it behave as a block element */

            border: 2px solid gray;
            border-radius: 8px;

            font-size: 16px;
            transition: 1s ease;

            position: relative;

            overflow: hidden;    

            transition: 0.1s ease;
            
        }

        .btn::before{
            content: 'Submit';
            color: white;
            position: absolute;
            background: gray;

            display: flex;

            justify-content: center;
            align-items: center;


            width: 100%;
            height: 100%;

            top: 0%;
            left: 0%;

            transition: top 0.3s ease 0.1s;
        }

        .btn:hover::before{
            cursor: pointer;
            top: 100%;
        }

        .btn:hover{
            cursor: pointer;
        }

        .btn:active{
            background: #343434;
            color: white;
        }

        .panel{
            display: flex;
            align-items: center;  /* align items on column */
            box-sizing: border-box;
            width: 100%;
            gap: 10px;
        }

        .inner-panel{
            position: relative;
            box-sizing: border-box; 
            min-width: 0;   
            max-height: 100%;
            height: 100%;
            flex: 1;

            margin-top: 10px;
            
            display: flex;
            align-items: center;
            
            
            
        }

        .inner-panel label {
            position: relative;
            left: 2px;
            top: 0px;
            transition: 0.3s ease;
            color: #7f7f7f;
        }

        .inner-panel input {
            position: absolute;
            box-sizing: border-box;
            width:100%;
            height: 40px;
            border-radius: 8px;
            font-size: 16px;
            
        }

        .date-panel {
            
        }

        .date-panel label {
            top: -40%;   /* for date specific style */
        }


        .btn:hover::before{
            cursor: pointer;
            top: 100%;
        }

        .btn:hover{
            cursor: pointer;
        }

        .btn:active{
            background: #343434;
            color: white;
        }


        /* //////////////////////////////////////////////////////// */
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        border-radius: 10px;
        }

        td, th {
       
        border: 1px solid #2a2a2a;

        text-align: left;
        padding: 8px;
        }


.table_card{
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);

    width: 95%;
    max-width: 1400px;

    overflow-x: auto;
}

.table_card h1{
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 28px;
    color: #1d1d1d;
}


table{
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 10px;
    background: white;
}


thead{
    background: #1f2937;
    color: white;
}

th{
    padding: 16px;
    text-align: left;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
}


td{
    padding: 14px 16px;
    border-radius: 0px;
    border-bottom: 1px solid #e5e7eb;
    font-size: 14px;
    color: #374151;
}


tbody tr:nth-child(even){
    background: #f9fafb;
}

tbody tr:hover{
    background: #eef6ff;
    transition: 0.2s ease;
    cursor: pointer;
}


tbody tr:last-child td{
    border-bottom: #374151;
}


@media (max-width: 768px){

    th,
    td{
        padding: 12px;
        font-size: 13px;
    }

    .table_card{
        padding: 10px;
    }

}


.pagination-wrapper nav {
    all: revert;
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 10px;
}

.pagination-wrapper nav a,
.pagination-wrapper nav span {
    all: revert;
    padding: 6px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    text-decoration: none;
    color: #374151;
}

.pagination-wrapper nav span:not([aria-label]),
.pagination-wrapper nav svg,
.pagination-wrapper [aria-label="pagination-ellipsis"],
.pagination-wrapper p {
    display: none;
}



    </style>

</head>
<body>

<div class='navBar'>
    <header style='position: relative;' class='foot'>1
        <h2 style='position: absolute; left: 25%; color: white;'>Welcome Admin</h2>
    </header>

    <hr style="border: 2px solid #88ea70; width: 100%;">

    <nav>
        
        <div class='first'>
            <a href="{{ route('home') }}"><span><P><i style='font-size: 1.4rem;' class="bi bi-house-check">  </i> Dashboard/Home</P></span></a>
        </div>

        <div class='second'>
            <a href="{{ route('home.claim') }}"><span><P><i style='font-size: 1.4rem;' class="bi bi-hand-index-thumb">  </i> Claim Item</P></span></a>
        </div>

        <div class='third'>
            <a href="{{ route('home.report') }}"><span><p><i style='font-size: 1.4rem;' class="bi bi-megaphone">  </i> Report Item</p></span></a>
        </div>

        <div class='fourth'>
            <a href="{{ route('test') }}"><span><p><i style='font-size: 1.4rem;' class="bi bi-card-list">  </i> Claim Reports</p></span></a>
        </div>
 
        <div class='fifth'>
            <a style='background: red;' href="{{ route('logout') }}"><span style='color: white;'><p><i style='color: white; font-size: 1.4rem;' class="bi bi-box-arrow-left">  </i>Logout</p></span></a>
        </div>

    </nav>

    <hr style="border: 2px solid #88ea70; width: 100%;">


    <footer class='foot'>a</footer>
</div>

    </div>

    <div class='main'>

        <!-- header -->
        <div class='header'>
            <h1>Lost and Found System</h1>
            <h2>Welcome User</h2>
            <p>This is where you can find your missing items and if you find an item in this campus, report it to the security office located at {location_place}</p>
        </div>

         <!-- content -->
        <div class='content'>

           
            <div style='border: 1px solid black;' class='table_card'>
                <h1>Claim Reports<h1>
                <table>
        
                    <thead>
                        <tr>
                            <th>Claim id</th>
                            <th>Claimants Full name</th>
                            <th>Email</th>
                            <th>Contact_no</th>
                            <th>Person's id</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($claims as $claim)
                        <tr>
                            <td>{{ $claim->claim_id }}</td>
                            <td>{{ $claim->retriever->last_name }}, {{ $claim->retriever->first_name }} {{ $claim->retriever->middle_name }}</td>
                            <td>{{ $claim->retriever->email }}</td>
                            <td>{{ $claim->retriever->contact_no }}</td>
                            <td>{{ $claim->retriever->person_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>

<tfoot>
    <tr>
        <td colspan="5" class="footer-pagination">
            <div class="pagination-wrapper">
                {{ $claims->links() }}
            </div>
        </td>
    </tr>
</tfoot>

                </table>


        

    </div>


    <script>

       const dateForm = document.getElementById('date_retrieved');

        dateForm.valueAsDate = new Date();;

    function toggleDropdown() {
        let menu = document.getElementById("dropdownMenu");

        if(menu.style.display === "block"){
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    }



    </script>

</body>
</html>
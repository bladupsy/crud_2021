<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: system-ui;
}
.row {
    margin-top: 12px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 15px;
  resize: vertical;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.button  {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  float: right;
  max-width: 95px;
}



input[type=cancel] {
  background-color: #FF7456;;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  float: right;
  margin-right: 12px;
  max-width: 95px;
  
}

input[type=cancel]:hover {
  background-color: #FF7456;;
}

.container {
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 20px;
  max-width: 720px;
  margin-top: 24px;
  margin: auto;
}

.center-container {
    margin: auto;
    max-width: 720px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.rounded {

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
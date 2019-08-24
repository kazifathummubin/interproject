
$('#image1').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read1(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview1').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image2').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read2(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview2').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image3').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read3(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview3').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

//
// $('#image3').change(function () {
//     var imgPath = this.value;
//     var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
//     if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
//         read3(this);
//     else
//         alert("Please select image file (jpg, jpeg, png).")
// });
// function read3(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.readAsDataURL(input.files[0]);
//         reader.onload = function (e) {
//             var show= $('#preview3').attr('src', e.target.result);
// //              $("#remove").val(0);
//             console.log(show);
//         };
//     }
// }

$('#image4').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read4(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview4').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image5').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read5(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview5').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image6').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read6(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview6').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image7').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read7(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read7(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview7').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image8').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read8(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read8(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview8').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image9').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read9(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read9(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview9').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image10').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read10(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read10(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview10').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image11').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read11(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read11(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview11').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image12').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read12(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read12(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview12').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image13').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read13(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read13(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview13').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image14').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read14(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read14(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview14').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image15').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read15(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read15(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview15').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image16').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read16(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read16(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview16').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image17').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read17(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read17(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview17').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image18').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read18(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read18(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview18').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image19').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read19(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read19(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview19').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image20').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read20(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read20(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview20').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image21').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read21(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read21(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview21').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image22').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read22(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read22(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview22').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image23').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read23(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read23(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview23').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image24').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read24(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read24(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview24').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image25').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read25(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read25(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview25').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image26').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read26(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read26(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview26').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image27').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read27(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read27(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview27').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image28').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read28(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read28(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview28').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image29').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read29(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read29(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview29').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image30').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read30(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read30(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview30').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image31').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read31(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read31(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview31').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image32').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read32(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read32(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview32').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image33').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read33(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read33(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview33').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image34').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read34(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read34(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview34').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image35').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read35(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read35(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview35').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image36').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read36(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read36(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview36').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image37').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read37(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read37(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview37').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image38').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read38(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read38(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview38').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image39').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read39(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read39(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview39').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image40').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read40(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read40(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview40').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image41').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read41(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read41(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview41').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image42').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read42(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read42(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview42').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image43').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read43(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read43(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview43').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image44').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read44(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read44(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview44').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image45').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read45(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read45(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview45').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image46').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read46(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read46(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview46').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image47').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read47(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read47(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview47').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image48').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read48(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read48(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview48').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image49').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read49(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read49(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview49').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image50').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read50(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read50(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview50').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image51').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read51(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read51(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview51').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image52').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read52(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read52(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview52').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}
$('#image53').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read53(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read53(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview53').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image54').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read54(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read54(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview54').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image55').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read55(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read55(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview55').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image56').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read56(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read56(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview56').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image57').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read57(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read57(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview57').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image58').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read58(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read58(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview58').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image59').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read59(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read59(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview59').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image60').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read60(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read60(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview60').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image61').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read61(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read61(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview61').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image62').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read62(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read62(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview62').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image63').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read63(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read63(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview63').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image64').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read64(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read64(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview64').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image65').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read65(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read65(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview65').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image66').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read66(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read66(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview66').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image67').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read67(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read67(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview67').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image68').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read68(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read68(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview68').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image69').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read69(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read69(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview69').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image70').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read70(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read70(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview70').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image71').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read71(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read71(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview71').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}

$('#image72').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read72(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read72(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview72').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}




$('#image73').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read73(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read73(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview73').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image74').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read74(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read74(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview74').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image75').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read75(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read75(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview75').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}




$('#image76').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read76(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read76(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview76').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image77').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read77(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read77(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview77').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image78').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read78(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read78(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview78').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image79').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read79(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read79(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview79').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image80').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read80(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read80(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview80').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}


$('#image81').change(function () {
    var imgPath = this.value;
    var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
        read81(this);
    else
        alert("Please select image file (jpg, jpeg, png).")
});
function read81(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var show= $('#preview81').attr('src', e.target.result);
//              $("#remove").val(0);
            console.log(show);
        };
    }
}



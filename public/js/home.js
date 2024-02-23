function loadWeekDays() {
    const date = new Date();
    const dayNumber = date.getDate()
    const daysValues = {
        seg: 1,
        ter: 2,
        qua: 3,
        qui: 4,
        sex: 5,
        sab: 6,
        dom: 7
    }
    const resultsDays = {
        seg: null,
        ter: null,
        qua: null,
        qui: null,
        sex: null,
        dom: null
    }

    var days = ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'];
    var day = days[date.getDay()];
    $(`#${day}`).css("background-color", "#ccc");

    Object.keys(daysValues).forEach(key => {
        if (daysValues[`${day}`] > daysValues[key]) {
            resultsDays[key] = Math.abs(daysValues[key] - dayNumber)
        } else if (daysValues[`${day}`] == daysValues[key]) {
            resultsDays[key] = dayNumber

        } else {
            resultsDays[key] = (daysValues[key] + dayNumber) - 1
        }

    });

    Object.keys(resultsDays).forEach(key => {
        $(`#${key}`).html(resultsDays[key])
        $(`#${key}`).css('border',  '1px solid ')
    });

}

loadWeekDays()

function requestRoute(route, func) {
    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: route,

            type: 'POST',

        }).done(function(msg) {
            $("#container").html(msg);
            if (func) {
                func()
            }

        })
        .fail(function(jqXHR, textStatus, msg) {
            alert(msg);
        });
}


$('nav').hide()
$('.content').css('padding',0)

$('.container-fluid').css('padding',0)
$(`#ter`).addClass('border-blue-600')

$("#btn").on("click", () => {
    requestRoute("/views/workouts",loadWeekDays)
})
$("#btn2").on("click", () => {
    requestRoute("/views/history")
})

function backRoute(){
    requestRoute("/views/workouts",loadWeekDays)
}




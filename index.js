function updateTables() {
    let clientTable = document.querySelector('#clients'); var clientString = "";
    let networkTable = document.querySelector('#networks'); var networkString = "";
    let knownTable = document.querySelector('#known'); var knownString = "";

    // device , source, destination, rssi, essid, channel, frame type, frame subtype, sequence
    $.getJSON("data/node1.json?rand=" + Date.now(), function (rawData) {  // update networks

        document.querySelector('#dev-total').innerHTML = "&nbsp;" + Object.keys(rawData).length; // total devices
        let networkCount = 0;
        let knownCount = 0;
        $.each(rawData, function (header, devices) {
            
            networkString += "<tr>";
            vals = Object.values(devices);
            networkString += "<td>" + vals[1] + "</td>";
            networkString += "<td>" + getManufacturer(vals[0]) + "</td>";
            networkString += "<td>" + vals[4] + "</td>";
            networkString += "<td>" + vals[5] + "</td>";
            networkString += "<td>" + vals[3] + "</td>";
            // networkString += "<td>" + vals[2] + "</td>";
            knownString += "</tr>";
            // console.log(vals[1]);
           if(isKnownNetwork(vals[1])) networkCount++;
           if(!getName(vals[1])=="") knownCount++;
        });
        document.querySelector('#dev-nets').innerHTML = "&nbsp;" + networkCount;
        document.querySelector('#dev-clients').innerHTML = "&nbsp;" + (Object.keys(rawData).length-networkCount);
        document.querySelector('#dev-known').innerHTML = "&nbsp;" + knownCount;
        networkTable.innerHTML = networkString;
        
    });
}

function isKnown(bssid) {  // detect found BSSID
    var found = false;
    $.ajax({
        type: "GET",
        url: "known.csv?rand=" + Date.now(),
        async: false,
        success: function (data) {
            var lines = data.split(/\r\n|\n/);
            for (var i = 1; i < lines.length - 1; i++) { // ignore header and blank line
                var data = lines[i].split(',');
                if (data[0] == bssid) { found = true; }
            }
        }
    });
    return found;
}

function getManufacturer(bssid) {
    vendor = "unknown";
    $.ajax({
        type: "GET",
        url: "mac-vendors.txt",
        async: false,
        success: function (data) {
            var lines = data.split(/\r\n|\n/);
            for (var i = 1; i < lines.length - 1; i++) { // ignore header and blank line
                var data = lines[i].split('\t');
                if (data[0] == bssid.substring(0, 8)) { vendor = data[1]; console.log(vendor); }
            }
        }
    });
    return vendor;
}

function getName(bssid) {
    name = "";
    $.ajax({
        type: "GET",
        url: "known.csv?=" + Date.now(),
        async: false,
        success: function (data) {
            var lines = data.split(/\r\n|\n/);
            for (var i = 1; i < lines.length - 1; i++) { // ignore header and blank line
                var data = lines[i].split(',');
                if (data[0] == bssid) { name = data[1]; }
            }
        }
    });
    return name;
}

function isKnownNetwork(bssid) { // merge with getName function when you're not a lazy bitch
    let isKnown = false;
    $.ajax({
        type: "GET",
        url: "data/networks.csv?=" + Date.now(),
        async: false,
        success: function (data) {
            var lines = data.split(/\r\n|\n/);
            // console.log(bssid);
            // console.log("..");
            for (var i = 1; i < lines.length - 1; i++) {
                // console.log(data[0]);
                var data = lines[i].split(',');
                if (data[0] == bssid) {
                    isKnown = true;
                }
            }
        }
    });
    return isKnown;
}
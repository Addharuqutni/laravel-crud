<style type="text/css">
  body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.25;
  }

  table {
    border: 1px solid #000;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 800px;
    table-layout: fixed;
  }


  table tr {
    border: 1px solid black;
    padding: 10px;
    color: black;
  }

  table th,
  table td {
    padding: 12px;
    text-align: center;
  }

  table th {
    font-size: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }

    table caption {
      font-size: 1.3em;
    }
    
    table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
    
    table tr {
      border-bottom: 3px solid #dddx;
      display: block;
      margin-bottom: .625em;
    }
    
    table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }
    
    table td::before {
      /*
      * aria-label has no advantage, it won't be read inside a table
      content: attr(aria-label);
      */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    table td:last-child {
      border-bottom: 0;
    }
  }

  h1 {
    text-align: center;
  }
</style>

<h1>Daftar Buku</h1>
<a href="/books/create"><button>add</button></a>
<p></p>
<table>
    <tr>
      <th style="width: 30px;">No</th>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
      <th>Perintah</th>
    </tr>
    @foreach($buku as $b)
    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->judul}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        <td>{{$b->pengarang}}</td>
        <td>
        <a href="/edit/{{ $b->id }}">Edit</a>
        |
        <a href="/hapus/{{ $b->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>
console.log('testsort')
document.addEventListener('click', function (e) {
  try {

    function findElementRecursive(element, tag) {
      return element.nodeName === tag ? element : findElementRecursive(element.parentNode, tag)
    }

    let down_class = ' dir-d '
    let up_class = ' dir-u '
    let regex_dir = / dir-(u|d) /
    let regex_table = /\bsortable\b/
    let alt_sort = e.shiftKey || e.altKey
    let element = findElementRecursive(e.target, 'TH')
    let tr = findElementRecursive(element, 'TR')
    let table = findElementRecursive(tr, 'TABLE')

    function reClassify(element, dir) {
      element.className = element.className.replace(regex_dir, '') + dir
    }

    function getValue(element) {
      return (
        (alt_sort && element.getAttribute('data-sort-alt')) || element.getAttribute('data-sort') || element.innerText
      )
    }
    if (regex_table.test(table.className)) {
      let column_index
      let nodes = tr.cells

      for (let i = 0; i < nodes.length; i++) {
        if (nodes[i] === element) {
          column_index = i
        } else {
          reClassify(nodes[i], '')
        }
      }

      let dir = down_class

      if (element.className.indexOf(down_class) !== -1) {
        dir = up_class
      }

      reClassify(element, dir)

      let org_tbody = table.tBodies[0]

      let rows = [].slice.call(org_tbody.rows, 0)

      let reverse = dir === up_class

  
      rows.sort(function (a, b) {
        let x = getValue((reverse ? a : b).cells[column_index])
        let y = getValue((reverse ? b : a).cells[column_index])
        return isNaN(x - y) ? x.localeCompare(y) : x - y
      })

     
      let clone_tbody = org_tbody.cloneNode()

      while (rows.length) {
        clone_tbody.appendChild(rows.splice(0, 1)[0])
      }


      table.replaceChild(clone_tbody, org_tbody)
    }
  } catch (error) {
    // console.log(error)
  }
})
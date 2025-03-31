import {
  Button,
  Pagination,
  Spinner,
  Table,
  TableBody,
  TableCell,
  TableColumn,
  TableHeader,
  TableRow
} from "@nextui-org/react";
import {useCallback, useEffect, useState} from "react";
import {useQuery} from "@/Context/QueryContext.jsx";
import {RowsPerPage} from "@/Components/Input/index.js";

export const Datatable = ({
                            data,
                            dataColumns,
                            highlightRow = () => {},
                            renderCell = (data, columnKey) => data[columnKey],
                            selectionMode = "multiple",
                            setSelected = () => {},
                            loadingState,
                            sort,
                            page,
                            entity
                          }) => {
  const [selectedData, setSelectedData] = useState(new Set());

  const {onRowsPerPage} = useQuery();

  const handleRowSelect = (id) => {
    setSelectedData(prevSelected => {
      const newSelected = new Set(prevSelected);
      if (newSelected.has(id)) {
        newSelected.delete(id);
      } else {
        newSelected.add(id);
      }
      return newSelected;
    });
  };

  useEffect(() => {
    setSelected(selectedData);
  }, [selectedData]);

  const isRowSelected = (data) => {
    if (typeof selectedData === 'string' && selectedData === 'all') {
      return true;
    }
    return selectedData instanceof Set && selectedData.has(data.id);
  };

  return (
    <Table
      aria-label={`Tabella ${entity}`}
      sortDescriptor={sort && sort.descriptor}
      onSortChange={sort && sort.set}
      bottomContentPlacement="outside"
      selectionMode={selectionMode}
      onSelectionChange={setSelectedData}
      selectionBehavior="toggle"
      isHeaderSticky={!!page}
      onRowAction={() => null}
      bottomContent={
        page && (
          <div className="flex flex-row justify-between items-center sm:-mb-2 gap-2 mb-5">
            <RowsPerPage onRowsPerPage={onRowsPerPage}/>
            <Pagination className="hidden lg:block" isCompact showControls showShadow
                        page={page.current} total={page.last} onChange={page.set}/>
          </div>
        )
      }
      classNames={{
        wrapper: page && "no-scrollbar z-10",
        td: 'group-data-[first=true]:first:rounded-tl-lg group-data-[first=true]:last:rounded-tr-lg group-data-[last=true]:first:rounded-bl-lg group-data-[last=true]:last:rounded-br-lg'
      }}
    >
      <TableHeader columns={dataColumns}>
        {(columnKey) => (
          <TableColumn key={columnKey.uid} columnKey={columnKey} allowsSorting={columnKey.sortable}>
            {columnKey.name}
          </TableColumn>
        )}
      </TableHeader>
      <TableBody items={data} loadingContent={<Spinner/>} loadingState={loadingState} emptyContent={`Nessuna ${entity} trovata.`}>
        {(data) => (
          <TableRow
            className={highlightRow(data)}
            key={data.id}
            onClick={() => handleRowSelect(data.id)}
            isSelected={isRowSelected(data)}
          >
            {(columnKey) => <TableCell>{renderCell(data, columnKey)}</TableCell>}
          </TableRow>
        )}
      </TableBody>
    </Table>
  );
};

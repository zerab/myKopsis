<?php
Cart::add('192ao12', 'Pentol', 1, 9.99);
Cart::add('1239ad0', 'Pentol', 2, 5.95, ['size' => 'large']);
?>
<div class="cart-table">
<table class="table">
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th></th>
        </tr>

        <?php foreach(Cart::content() as $row) :?>
            <tr>
                <td>
                    <p><strong><?php echo $row->name; ?></strong></p>
                    <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                </td>
                <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                <td>Rp.<?php echo $row->price; ?></td>
                <td>Rp.<?php echo $row->total; ?></td>
                <td><button type="button" name="button"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>

        <?php endforeach;?>

    </tbody>

    <tfoot>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Subtotal</td>
            <td><?php echo Cart::subtotal(); ?></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Tax</td>
            <td><?php echo Cart::tax(); ?></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td><?php echo Cart::total(); ?></td>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
